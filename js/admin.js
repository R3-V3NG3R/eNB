/*
 TO submit Form
 */
function not()
{
   //getting input from textEditor
   var val=document.getElementById("area").contentWindow.document.body.innerHTML;
   document.getElementById("notice").value=val;

   var tit=document.getElementById("title").value;
   //Form validation
   if(!(val=="") && !(tit=="")){
      document.getElementById("nForm").submit();
   }
   else
   {
      alert("Please Fill all the fileds");
   }
}


/*
   Text textEditor
*/

var showingSourceCode = false;
var isInEditMode = true;
function enableEditMode()
{
      //making iFrame as editable frame
      richTextField.document.designMode = 'on';
}
function execCmd(command) {
   //for basic textediting buttons
      richTextField.document.execCommand(command,false,null);
   }
function execCommandWithArg(command,arg){
   //for textingEditing dropdown options
      richTextField.document.execCommand(command,false,arg);
   }

//Code To Disable Refresh
document.onkeydown = function () {
   switch (event.keyCode) {
      case 116 : //F5 button
      event.returnValue=false;
      event.keyCode = 0;
      return false;
      case 82 : //r Button
      if (event.ctrlKey){
         event.returnValue=false;
         event.keyCode=0;
         return false;
      }
   }
}
