$('form').on('submit', function(e) {
    e.preventDefault();
    
    let data = new FormData(this),
        action = $(this).attr('action');
    
    axios.post(action, data)
        .then(function (responx) {
            // if(responx.data.auth) {
                // localStorage.setItem('navlink', $('meta[name="base_url"]').prop('content')+'/dash')
                // location.reload()
            // }            
        })
        .catch(function (e) {
                $('#report-error')
                    .text(e.response.data.message)
                        // .addClass( e.response.data.class === undefined ? 'text-danger' : e.response.data.class )
                            .css({'color': 'red', 'font-style': 'italic'});
            

            // localStorage.setItem('navlink', $('meta[name="base_url"]').prop('content') + (e.response.data.auth !== undefined ? '/dash' : '/welcome'));  
        });
})