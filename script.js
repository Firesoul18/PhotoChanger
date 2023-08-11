$(document).ready(function () {
    manual = false;
    $(".manual-entry").hide()
    // disableSubmit();

    function hos() {
        if (!manual) {
            $(".manual-entry").hide()

        }else{
            $(".manual-entry").show()
        }
    }

    $(".quality").change(() => {
        if($(".quality").val()=="manual")
        manual = true;
        else
        manual=false;
        hos();
    })

    $(".manual-data").change(()=>{
        console.log($(".manual-data").val())
        if($(".manual-data").val()<10){
            $(".warning").text("Value can not be less than 10")
        }else if($(".manual-data").val()>100){
            $(".warning").text("Value can not exceed 100")
        }else{
            $(".warning").text("")
        }
    })

    $(".manual-data").keyup(()=>{
        console.log($(".manual-data").val())
        if($(".manual-data").val()<10){
            $(".warning").text("Value can not be less than 10")
        }else if($(".manual-data").val()>100){
            $(".warning").text("Value can not exceed 100")
        }else{
            $(".warning").text("")
        }
    })

    $(".reset").click(()=>{
        manual=false;
        hos()
    })

    function disableSubmit(){
        $(".submit").prop("disabled",true);
    }

});