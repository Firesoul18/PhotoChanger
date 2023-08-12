$(document).ready(function () {
    let width = document.querySelector("#width")
    let height = document.querySelector("#height");
    let image;


    $("#photo").change(function (e) {
        const reader = new FileReader();
        reader.readAsDataURL(e.target.files[0]);
        $(reader).on("load",() => { 
            changeImage(reader.result)
            // console.log("Image Loaded")
         })
    });

    function changeImage(imgURL){
        image=new Image();
        image.src=imgURL;
        // console.log("changeImage called")
        image.addEventListener("load",function(){
            ratio = image.width/image.height;
            width.value = image.width;
            height.value = image.height;
        })
    }

    $("#width").change(()=>{
        if($("#keep").prop('checked') == true){
            height.value=Math.floor(($("#width").val())/ratio);
        }
    })
    $("#height").change(()=>{
        if($("#keep").prop('checked') == true){
            width.value = Math.floor($("#height").val()*(ratio));
        }
    }) 
    $("#width").keyup(()=>{
        if($("#keep").prop('checked') == true){
            height.value=Math.floor(($("#width").val())/ratio);
        }
    })
    $("#height").keyup(()=>{
        if($("#keep").prop('checked') == true){
            width.value = Math.floor($("#height").val()*(ratio));
        }
    })

    $("#keep").click(()=>{
        if($("#keep").prop('checked')==true){
            height.value=Math.floor(($("#width").val())/ratio);
        }
    })


});