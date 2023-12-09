function changepersonshift(selectPerson){

    var selectpersonvalue=selectPerson.value;
    if(selectpersonvalue=="--"){
        var selpid=selectPerson.id;
       selpid=selpid.replace('namefamily-','');
        document.getElementById('Name-'+selpid).value="";
         document.getElementById('firstName-'+selpid).value="";
        document.getElementById('lastName-'+selpid).value=""; 
        document.getElementById('NationalCode-'+selpid).value="";
        document.getElementById('PersonalCode-'+selpid).value="";
    }
    else
    {
        var selpid=selectPerson.id;
       selpid=selpid.replace('namefamily-','');
        document.getElementById('Name-'+selpid).value=selectpersonvalue;
        const dname =selectPerson.selectedOptions[0].dataset['name'];
        const dfamily =selectPerson.selectedOptions[0].dataset['family'];
        const nationalcode =selectPerson.selectedOptions[0].dataset['nationalcode'];
        const personalcode =selectPerson.selectedOptions[0].dataset['personalcode'];
        
        document.getElementById('firstName-'+selpid).value=dname;
        document.getElementById('lastName-'+selpid).value=dfamily; 
        document.getElementById('NationalCode-'+selpid).value=nationalcode;
        document.getElementById('PersonalCode-'+selpid).value=personalcode;
    }
     
}
 
function loadpersonnel(selectPost){

  var selpost=selectPost.value; 
    if(selpost=="--"){
        var selpid=selectPost.id;
        
        selpid=selpid.replace('post-','');
        document.getElementById('Name-'+selpid).value="";
         document.getElementById('firstName-'+selpid).value="";
        document.getElementById('lastName-'+selpid).value=""; 
        document.getElementById('NationalCode-'+selpid).value="";
        document.getElementById('PersonalCode-'+selpid).value="";
         var selnamefamily=document.getElementById('namefamily-'+selpid);
        document.getElementById('namefamily-'+selpid).value="";
         while (selnamefamily.length > 0) {
                        selnamefamily.remove(0);
            }
        
    }
    else
    {
  var selpostid=selectPost.id;
  var idrow=selectPost.parentElement.className;
  var idtd = idrow.replace('tdpost-','');
 
//  var selnamefamily=document.getElementById('namefamily-'+idrow);
   $.ajax({
           url:'../../../Db/AllPersonnelPost.php',
           method:'POST',
        
           data :{"selpost" : selpost ,
                //  "machine":machine,
                
                 },
              //    dataType: 'json',
           success: function(response){
              // debugger;
              var data = JSON.parse(response); //var idrow=selectPost.parentElement.className;
               var id = selpostid.replace('post-','');
               var n='namefamily-'+id;
                var selnamefamily=document.getElementById(n);
                 
                 while (selnamefamily.length > 0) {
                        selnamefamily.remove(0);
            }
//$(selnamefamily).remove();
  $(selnamefamily).append($("<option>--</option>"));
              $.each(data, function(key, value) {   
                 $(selnamefamily)
                     .append($("<option ></option>")
                                .attr("data-name", value[0])
                                .attr("data-family", value[1])
                                .attr("data-NationalCode", value[2])
                                .attr("data-PersonalCode", value[3])
                                .text(value[0]+" "+value[1])); 
            });
              
              console.log(response);
           
            },
         error: function(XMLHttpRequest, textStatus, errorThrown) { 
             
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
    }    
        })
   
 }
}
function focuschangepick(newPick){
     var newpick = parseInt(newPick.value) || 0;
     var selpid=newPick.id;
      selpid=selpid.replace('pick5-','');
      var postperson=document.getElementById('post-'+selpid);
      var postsel=postperson.selectedOptions[0].innerText.trim();
       postsel=postsel.trim();
      
        var num1 = parseInt($('#pickIn8').val()) || 0;
        var num2 = parseInt($('#pickIn4').val()) || 0;
       // $('.pick').val(num1 + num2);
      //  var pick = $('.pick').val();
        var machin=$('#machine').val();
        var amountFinancial=Financial(newpick , machin);
       
       var factorba=1,factorkb=0.8,factorkr=0.8,factorbo=0;
          
       if(postsel=="بافنده"){
         document.getElementById('financial7-'+selpid).value=Math.ceil(amountFinancial*factorba);
        }
        else if(postsel=="کمک بافنده"){
            document.getElementById('financial7-'+selpid).value=Math.ceil(amountFinancial*factorkb);
        }
        else if(postsel=="کریل"){
            document.getElementById('financial7-'+selpid).value=Math.ceil(amountFinancial*factorkr);
        }
        else if(postsel=="بوبین"){
            document.getElementById('financial7-'+selpid).value=Math.ceil(amountFinancial*factorbo);
        }     
               
     //debugger;
}

$('#check-time').click(function() {
var selectedTimeIn = $('#time-in option:selected').text();
var selectedTimeOut = $('#time-out option:selected').text();
// alert(selectedTimeOut);

$('.entry').val(selectedTimeIn);
$('.exit').val(selectedTimeOut);


              });
              counter  = 0;

$(document).ready(function() {
                //    var counter = 0;
               $("#shiftSetting").click(function(){
                 //$("tbody tr").remove();
                  $("#personnelTable tbody tr").remove();
                 $("#faketr").remove();
                      var shift = $("#shift option:selected").val();
                      var machine = $("#machine").val();
                      var datesel=$("#get_date_view").val();
                      datesel=datesel.replace(/\//g, '-');
                      console.log(datesel);
                      //datesel;
                      //debugger;
                   $.ajax({
                   url:'../../../Db/getp.php',
                   method:'POST',
                
                   data :{"shift" : shift ,
                          "machine":machine,
                          "datesel":datesel,
                         },
                   success: function(response){
                              var data = JSON.parse(response);
                           //   debugger;
                              var lengthdata=data.length;
                               var table = $('#personnelTable');
                              if(data[1]==1)
                              {
                                      var alertBox = document.createElement("div");
                                      alertBox.classList.add("alert", "alert-danger");
                                      alertBox.textContent = "قبلا شیفت تنظیم شده است";
                                      alertBox.style.position = "fixed";
                                      alertBox.style.top = "60px";
                                      alertBox.style.left = "0";
                                      alertBox.style.bottom = "0";
                                      alertBox.style.width = "250px";
                                        alertBox.style.height = "60px";
                                      document.body.appendChild(alertBox);
                                    
                                     setTimeout(function() {
                                        alertBox.style.display = "none";
                                      }, 6000);
                                // alert("قبلا شیفت تنظیم شده است");
                                  console.log(response);
                                 document.getElementById("save-shift").disabled = true;
                                  $.each(data[0], function(index, value) {
                                        counter++
                                         var row = $('<tr>');
                                         for (var i = 0; i <8; i++) {
                                           
                                             var cell =$('<td>').attr('class','tdpost-'+ i);
                                             if (i == 0) { 
                                               // console.log(value.Post);
                                                var postk=value.Post;
                                                var namepost="";
                                                if(postk=="ba")
                                                 namepost="بافنده";
                                                else if(postk=="kb")
                                                  namepost="کمک بافنده";
                                                else if(postk=="kr")
                                                 namepost="کریل";
                                                 else if (postk="bo")
                                                   namepost="بوبین";
                                                 cell.append($('<span>').text(namepost));
                                             } else if (i == 1) { 
                                                 cell.append($('<span>').text(value.Name + ' ' + value.Family).attr('style','width: 70% !important;'));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'firstName-' + counter).attr('name', 'firstName-' + counter).val(value.Name));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'lastName-' + counter).attr('name', 'lastName-' + counter).val(value.Family));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'NationalCode-' + counter).attr('name', 'NationalCode-' + counter).attr('value', value.NationalCode));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'PersonalCode-' + counter).attr('name', 'PersonalCode-' + counter).attr('value', value.PersonalCode));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'radif-' + counter).attr('name', 'radif-' + counter).attr('value', value.id));
                                         } 
                                             else if (i == 2) { 
                                                 cell.append($('<span>').text('--'));
                                             } 
                                             else if(i==3){
                                                 cell.append($('<span>').text(value.StartTime));
                                             } else if(i==4){
                                                cell.append($('<span>').text(value.EndTime));
                                            } else if(i==5){
                                                cell.append($('<span>').text(value.PersonelPeak));
                                           
                                           } else if(i==6){
                                                cell.append($('<span>').text(value.Reward));
                                           } else {
                                                cell.append($('<span>').text(value.Financial));
                                            }
                                             row.append(cell);
                                         }
                                         table.append(row);
                                     });
                                  /*    $.each(data, function(index, value) {
                                        counter++
                                         var row = $('<tr>');
                                         for (var i = 0; i <8; i++) {
                                           
                                             var cell =$('<td>').attr('class','tdpost-'+ i);
                                             if (i == 0) { 
                                                console.log(value.Post);
                                                 cell.append($('<select class="form-select mb-2" name="post" id="post-" onclick="loadpersonnel(this)" onchange="loadpersonnel(this)"> <option>--</option><option value="ba">بافنده</option> <option value="kb">کمک بافنده</option>	  <option value="kr">کریل</option>	  <option value="bo">بوبین</option>'+
                    													'<option value="all-kereel">همه کریل</option>  <option value="all-bovin">همه بویین</option><option value="all-kb">همه کمک بافنده</option>	  <option value="all-ba">همه بافنده</option>'+
                    													'</select>').attr('id', 'post-' + counter).attr('name', 'post-' + counter).val(value.Post).attr('class' , 'postt'));
                                             } else if (i == 1) { 
                                                 cell.append($('<input>').attr('type', 'text').attr('id', 'Name-' + counter).attr('name', 'Name-' + counter).val(value.Name + ' ' + value.Family).attr('readonly', 'true').attr('class' , 'namee').attr('style','width: 70% !important;'));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'firstName-' + counter).attr('name', 'firstName-' + counter).val(value.Name));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'lastName-' + counter).attr('name', 'lastName-' + counter).val(value.Family));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'NationalCode-' + counter).attr('name', 'NationalCode-' + counter).attr('value', value.NationalCode));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'PersonalCode-' + counter).attr('name', 'PersonalCode-' + counter).attr('value', value.PersonalCode));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'radif-' + counter).attr('name', 'radif-' + counter).attr('value', value.id));
                                         } 
                                             else if (i == 2) { 
                                                 cell.append($('<select class="form-select mb-2" onchange="changepersonshift(this)" ><option></option></select>').attr('type', 'text').attr('id', 'namefamily-' + counter).attr('name', 'namefamily-' + counter).val(value.Name + ' ' + value.Family).attr('class' , 'namee'));
                                             } 
                                             else if(i==3){
                                                 cell.append($('<input>').attr('type', 'text').attr('id', 'entry' + i + '-' + counter).attr('name', 'StartTime-' + counter).attr('class' , 'entry'));
                                             } else if(i==4){
                                                cell.append($('<input>').attr('type', 'text').attr('id', 'exit' + i + '-' + counter).attr('name', 'EndTime-' +counter).attr('class' , 'exit'));
                                            } else if(i==5){
                                                cell.append($('<input onfocusout="focuschangepick(this)">').attr('type', 'text').attr('id', 'pick' + i + '-' + counter).attr('name', 'pick-' +counter).attr('class' , 'pick'));
                                           
                                           } else if(i==6){
                                                cell.append($('<input>').attr('type', 'text').attr('id', 'reward' + i + '-' + counter).attr('name', 'reward-' +counter).attr('class' , 'reward'));
                                           } else {
                                                cell.append($('<input>').attr('type', 'text').attr('id', 'financial' + i + '-' + counter).attr('name', 'financial-' +counter).attr('class' , 'financial'));
                                            }
                                             row.append(cell);
                                         }
                                         table.append(row);
                                     });*/
                               }
                              else
                                {
                                    document.getElementById("save-shift").disabled = false;
                                    
                                    
                                     $.each(data[0], function(index, value) {
                                        counter++
                                         var row = $('<tr>');
                                         for (var i = 0; i <8; i++) {
                                           
                                             var cell =$('<td>').attr('class','tdpost-'+ i);
                                             if (i == 0) { 
                                              //  console.log(value.Post);
                                                 cell.append($('<select class="form-select mb-2" name="post" id="post-" onclick="loadpersonnel(this)" onchange="loadpersonnel(this)"> <option>--</option><option value="ba">بافنده</option> <option value="kb">کمک بافنده</option>	  <option value="kr">کریل</option>	  <option value="bo">بوبین</option>'+
                    													'<option value="all-kereel">همه کریل</option>  <option value="all-bovin">همه بویین</option><option value="all-kb">همه کمک بافنده</option>	  <option value="all-ba">همه بافنده</option>'+
                    													'</select>').attr('id', 'post-' + counter).attr('name', 'post-' + counter).val(value.Post).attr('class' , 'postt'));
                                             } else if (i == 1) { 
                                                 cell.append($('<input>').attr('type', 'text').attr('id', 'Name-' + counter).attr('name', 'Name-' + counter).val(value.Name + ' ' + value.Family).attr('readonly', 'true').attr('class' , 'namee').attr('style','width: 70% !important;'));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'firstName-' + counter).attr('name', 'firstName-' + counter).val(value.Name));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'lastName-' + counter).attr('name', 'lastName-' + counter).val(value.Family));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'NationalCode-' + counter).attr('name', 'NationalCode-' + counter).attr('value', value.NationalCode));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'PersonalCode-' + counter).attr('name', 'PersonalCode-' + counter).attr('value', value.PersonalCode));
                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'radif-' + counter).attr('name', 'radif-' + counter).attr('value', value.id));
                                         } 
                                             else if (i == 2) { 
                                                 cell.append($('<select class="form-select mb-2" onchange="changepersonshift(this)" ><option></option></select>').attr('type', 'text').attr('id', 'namefamily-' + counter).attr('name', 'namefamily-' + counter).val(value.Name + ' ' + value.Family).attr('class' , 'namee'));
                                             } 
                                             else if(i==3){
                                                 cell.append($('<input>').attr('type', 'text').attr('id', 'entry' + i + '-' + counter).attr('name', 'StartTime-' + counter).attr('class' , 'entry'));
                                             } else if(i==4){
                                                cell.append($('<input>').attr('type', 'text').attr('id', 'exit' + i + '-' + counter).attr('name', 'EndTime-' +counter).attr('class' , 'exit'));
                                            } else if(i==5){
                                                cell.append($('<input onfocusout="focuschangepick(this)">').attr('type', 'text').attr('id', 'pick' + i + '-' + counter).attr('name', 'pick-' +counter).attr('class' , 'pick'));
                                           
                                           } else if(i==6){
                                                cell.append($('<input>').attr('type', 'text').attr('id', 'Reward' + i + '-' + counter).attr('name', 'Reward-' +counter).attr('class' , 'reward'));
                                           } else {
                                                cell.append($('<input>').attr('type', 'text').attr('id', 'financial' + i + '-' + counter).attr('name', 'financial-' +counter).attr('class' , 'financial'));
                                            }
                                             row.append(cell);
                                         }
                                         table.append(row);
                                     });
                                       
                                       
                                       for(j=0;j<6;j++)
                                    {
                                     var row = $('<tr>');
                                       counter++
                                                         for (var i = 0; i <8; i++) {
                                                           
                                                             var cell =$('<td>').attr('class','tdpost-'+ i);
                                                             if (i == 0) { 
                                                              //  console.log(value.Post);
                                                                 cell.append($('<select class="form-select mb-2" name="post" id="post-" onchange="loadpersonnel(this)">  <option >--</option><option value="ba">بافنده</option> <option value="kb">کمک بافنده</option>	  <option value="kr">کریل</option>	  <option value="bo">بوبین</option>'+
                                    													'<option value="all-kereel">همه کریل</option>  <option value="all-bovin">همه بویین</option><option value="all-kb">همه کمک بافنده</option>	  <option value="all-ba">همه بافنده</option>'+
                                    													'</select>').attr('id', 'post-' + counter).attr('name', 'post-' + counter).attr('class' , 'postt'));
                                                             } else if (i == 1) { 
                                                                 cell.append($('<input>').attr('type', 'text').attr('id', 'Name-' + counter).attr('name', 'Name-' + counter).attr('readonly', 'true').attr('class' , 'namee').attr('style','width: 70% !important;'));
                                                             
                                                                  cell.append($('<input>').attr('type', 'hidden').attr('id', 'firstName-' + counter).attr('name', 'firstName-' + counter));
                                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'lastName-' + counter).attr('name', 'lastName-' + counter));
                                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'NationalCode-' + counter).attr('name', 'NationalCode-' + counter));
                                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'PersonalCode-' + counter).attr('name', 'PersonalCode-' + counter));
                                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'radif-' + counter).attr('name', 'radif-' + counter));
                                                                 
                                                             } 
                                                             else if (i == 2) { 
                                                                 cell.append($('<select class="form-select mb-2" onchange="changepersonshift(this)"  ><option></option></select>').attr('type', 'text').attr('id', 'namefamily-' + counter).attr('name', 'namefamily-' + counter).attr('class' , 'namee'));
                                                             } else if(i==3){
                                                                 cell.append($('<input>').attr('type', 'text').attr('id', 'entry' + i + '-' + counter).attr('name', 'StartTime-' + counter).attr('class' , 'entry'));
                                                             } else if(i==4){
                                                                cell.append($('<input>').attr('type', 'text').attr('id', 'exit' + i + '-' + counter).attr('name', 'EndTime-' +counter).attr('class' , 'exit'));
                                                             } else if(i==5){
                                                                cell.append($('<input  onfocusout="focuschangepick(this)">').attr('type', 'text').attr('id', 'pick' + i + '-' + counter).attr('name', 'pick-' +counter).attr('class' , 'pick'));
                                                             } else if(i==6){
                                                                cell.append($('<input>').attr('type', 'text').attr('id', 'Reward' + i + '-' + counter).attr('name', 'Reward-' +counter).attr('class' , 'reward'));
                                                             } else {
                                                                cell.append($('<input>').attr('type', 'text').attr('id', 'financial' + i + '-' + counter).attr('name', 'financial-' +counter).attr('class' , 'financial'));
                                                            }
                                                             row.append(cell);
                                                         }
                                                         table.append(row);
                                    }
                                    
                                    ///////////
                                   /* for(j=0;j<6;j++)
                                    {
                                     var row = $('<tr>');
                                       counter++
                                                         for (var i = 0; i <8; i++) {
                                                           
                                                             var cell =$('<td>').attr('class','tdpost-'+ i);
                                                             if (i == 0) { 
                                                              //  console.log(value.Post);
                                                                 cell.append($('<select class="form-select mb-2" name="post" id="post-" onchange="loadpersonnel(this)">  <option >--</option><option value="ba">بافنده</option> <option value="kb">کمک بافنده</option>	  <option value="kr">کریل</option>	  <option value="bo">بوبین</option>'+
                                    													'<option value="all-kereel">همه کریل</option>  <option value="all-bovin">همه بویین</option><option value="all-kb">همه کمک بافنده</option>	  <option value="all-ba">همه بافنده</option>'+
                                    													'</select>').attr('id', 'post-' + counter).attr('name', 'post-' + counter).attr('class' , 'postt'));
                                                             } else if (i == 1) { 
                                                                 cell.append($('<input>').attr('type', 'text').attr('id', 'Name-' + counter).attr('name', 'Name-' + counter).attr('readonly', 'true').attr('class' , 'namee').attr('style','width: 70% !important;'));
                                                             
                                                                  cell.append($('<input>').attr('type', 'hidden').attr('id', 'firstName-' + counter).attr('name', 'firstName-' + counter));
                                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'lastName-' + counter).attr('name', 'lastName-' + counter));
                                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'NationalCode-' + counter).attr('name', 'NationalCode-' + counter));
                                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'PersonalCode-' + counter).attr('name', 'PersonalCode-' + counter));
                                                                 cell.append($('<input>').attr('type', 'hidden').attr('id', 'radif-' + counter).attr('name', 'radif-' + counter));
                                                                 
                                                             } 
                                                             else if (i == 2) { 
                                                                 cell.append($('<select class="form-select mb-2" onchange="changepersonshift(this)"  ><option></option></select>').attr('type', 'text').attr('id', 'namefamily-' + counter).attr('name', 'namefamily-' + counter).attr('class' , 'namee'));
                                                             } else if(i==3){
                                                                 cell.append($('<input>').attr('type', 'text').attr('id', 'entry' + i + '-' + counter).attr('name', 'StartTime-' + counter).attr('class' , 'entry'));
                                                             } else if(i==4){
                                                                cell.append($('<input>').attr('type', 'text').attr('id', 'exit' + i + '-' + counter).attr('name', 'EndTime-' +counter).attr('class' , 'exit'));
                                                             } else if(i==5){
                                                                cell.append($('<input  onfocusout="focuschangepick(this)">').attr('type', 'text').attr('id', 'pick' + i + '-' + counter).attr('name', 'pick-' +counter).attr('class' , 'pick'));
                                                             } else if(i==6){
                                                                cell.append($('<input>').attr('type', 'text').attr('id', 'reward' + i + '-' + counter).attr('name', 'reward-' +counter).attr('class' , 'reward'));
                                                             } else {
                                                                cell.append($('<input>').attr('type', 'text').attr('id', 'financial' + i + '-' + counter).attr('name', 'financial-' +counter).attr('class' , 'financial'));
                                                            }
                                                             row.append(cell);
                                                         }
                                                         table.append(row);
                                    }*/
                                    ////////
                                 }
                         }
             
                      });
                  
              });
   });
        
    // ================= نمایش کاربران شیفت الف به صورت پیشفرض=   ===========

//     $.ajax({
//         url:'Db/getp.php',
//         method:'POST',
     
       
//         success: function(response){
//            var data = JSON.parse(response);
// //               alert(data);
// console.log(response);
//            var table = $('#personnelTable');

          
           
//            $.each(data, function(index, value) {
//             counter++
//             table.append($('<input>').attr('type', 'hidden').attr('name', 'NationalCode-' + counter).attr('value', value.NationalCode));
//             table.append($('<input>').attr('type', 'hidden').attr('name', 'PersonalCode-' + counter).attr('value', value.PersonalCode));
//             table.append($('<input>').attr('type', 'hidden').attr('name', 'firstName-' + counter).attr('value', value.Name));
//             table.append($('<input>').attr('type', 'hidden').attr('name', 'lastName-' + counter).attr('value', value.Family));
//             table.append($('<input>').attr('type', 'hidden').attr('name', 'radif-' + counter).attr('value', value.id));
//             // table.append($('<input>').attr('type', 'hidden').attr('name', counter).attr('value', value.id));

//                   var row = $('<tr>');
//                   for (var i = 0; i < 6; i++) {
                   
//                       var cell = $('<td>').attr('class','tdpost-'+ i);
//                       if (i == 0) { 
//                           cell.append($('<input>').attr('type', 'text').attr('id', 'post-' + value.ID).attr('name', 'post-' + value.ID).val(value.Post).attr('readonly', 'true').attr('class' , 'postt'));
//                       } else if (i == 1) { 
//                         cell.append($('<input>').attr('type', 'text').attr('id', 'Name-' + value.ID).attr('name', 'Name-' + value.ID).val(value.Name + ' ' + value.Family).attr('readonly', 'true').attr('class' , 'namee'));
//                     } else if(i==2){
//                           cell.append($('<input>').attr('type', 'text').attr('id', 'entry' + i + '-' + value.ID).attr('name', 'StartTime-' + value.ID).attr('class' , 'entry'));
//                       } else if(i==3){
//                          cell.append($('<input>').attr('type', 'text').attr('id', 'exit' + i + '-' + value.ID).attr('name', 'EndTime-' + value.ID).attr('class' , 'exit'));
//                      } else if(i==4){
//                          cell.append($('<input>').attr('type', 'text').attr('id', 'pick' + i + '-' + value.ID).attr('name', 'pick-' + value.ID).attr('class' , 'pick'));
//                      } else {
//                          cell.append($('<input>').attr('type', 'text').attr('id', 'financial' + i + '-' + value.ID).attr('name', 'financial-' + value.ID).attr('class' , 'financial'));
//                      }
//                       row.append(cell);
//                   }
//                   table.append(row);
//               });


//         }
  
//            });
       

