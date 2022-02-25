// toggle faculty
$('#facultybutton').on('click',function(){
   $('#deptab').toggle(300);
});

// for height of db div 
const height = document.querySelector('.admin-div').offsetHeight;
   ht = (window.innerHeight)-(height)-25+'px';
$(".right-bottom").css('min-height',ht)

// deleting confirmation
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record? deleted data cannot be reteieved!');
   if(conf)
      window.location=anchor.attr("href");
}

// category background on load
$(document).ready(function(){
    var str =window.location.href;
    const strList = str.split("/");
    var fnm = strList.pop();
    var tags = document.getElementsByClassName('catList');
    for (let x of tags) {
        var req = x.children[0].children[0];
        if(req != undefined){
            if(str==req){
                $(x).css("background-color","red");
                $(req).css("color","white");
            }        
        }
    }
});

// to make tr click as anchor click
$('.catList').on('click',function(){
   var thishref = $(this).find('a').attr("href");
   if(thishref != undefined){
      window.location=thishref;
   }
});

// display image beside input file in manage-subjects
function chang(facid){
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById(`${facid}`);
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}