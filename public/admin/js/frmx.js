$('form').on('submit', function(e) {
    e.preventDefault();
    
    let data = new FormData(this),
        action = $(this).attr('action');
    
    $(":submit", this).on("click", () => { return false })
    axios.post(action, data)
        .then(setTimeout(() => location.reload(), 3000))
        .catch((e) => $('#report-error').text(e.response.data.message));
})