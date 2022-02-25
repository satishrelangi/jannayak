
// validating and sending registered students data to db
function Validate(){
    var reg;
    var name=$("#name").val();
    var phone=$("#phone").val();
    var dob=$("#dob").val();
    var gender=$("#gender").val();

    if (name == "") {
        alert(" name field shouldn't be empty");
        return false;
    }
    else{
        $.ajax({
        url:'data.php',
            method:'POST',
            data:{
                reg:1,
                name:name,
                phone: phone,
                dob:dob,
                gender:gender
            },
            success:function(data){
                alert(data);
            }
        });
    }
}