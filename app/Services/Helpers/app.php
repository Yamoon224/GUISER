<?php

use App\Models\Win;
    use App\Models\User;

    if (!function_exists("parentCode")) 
    {
        function parentCode($code = '85460164') 
        {
            // Récupérer l'utilisateur avec le code donné
            $parent = User::firstWhere(compact('code'));
            // $parent = User::first();

            // Vérifier s'il existe et s'il a moins de trois utilisateurs avec le même code
            $children = $parent->children();
            if ($children->count() < 3) 
                return $parent->code;     
            
            return codeFrmChildren($children);
        }
    }

    if (!function_exists("codeFrmChildren")) {
        function codeFrmChildren($children, $limit = 3) {
            $subchildren = collect();

            foreach ($children as $child) {
                $childrenFromChild = $child->children();
                if ($childrenFromChild->count() < $limit) 
                    return $child->code; 
                
                $subchildren = $subchildren->merge($childrenFromChild);
            }

            return codeFrmChildren($subchildren);
        }
    }

    if (!function_exists("winByAddChild")) {
        function winByAddChild($user, $level = 2, $amount = 5) {
            $parent = $user->parent();
            if (!is_null($parent)) {
                $parent->update(['balance'=>$parent->balance + $amount]);
                Win::create(['amount' => $amount, 'user_id' => $parent->id, 'level_id' => $level]);
                $level++;

                if ($parent->parent()) 
                    winByAddChild($parent, $level, $amount);
            }
            return true;
        }
    }

    if (!function_exists("uiavatar")) {
        function uiavatar($name = '') {
            return "https://ui-avatars.com/api/?name=".str_replace(' ', '+', !empty($name) ? $name : auth()->user()->name);
        }
    }

    /**
     * @param $money|string : The amount to format
     * @param $sep|string : The separator who need to replace
     * @param $currency|string : The currency of the money
     * @return string : return a string 
     */
    if (!function_exists('moneyFormat')) {
        function moneyFormat(string $amount, string $sep = " ", string $currency = "USD") {
            $number = number_format($amount, 0, ',', $sep);
            return $number. " " .$currency;
        }   
    }