$(".page-next").click(function(){
    const target = $(this).data("target")
    $(".page").each(function(){
        if($(this).data("page") == target){
            $(this).show()
        }
        else{
            $(this).hide()
        }
    })
})