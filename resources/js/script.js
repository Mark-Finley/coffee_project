$('#details').click(function(e){
    if(confirm('Do you want to leave?') == false){
        return e.preventDefault()
    }
})