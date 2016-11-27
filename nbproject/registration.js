/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $("#registration_frm").validate({
        rules:
               {
                first_name:
                       {
                        required: true
                       },
                last_name:
                        {
                       required: true
                        },
                contact:
                        {
                         required: true,
                         digits:true
                        },
                 email_id:
                         {
                         required: true,
                         email:true,
                         remote:
                             {
                            url: "nbproject/ajax_frm.php",
                            type: "post",
                            /*dataFilter: function(response) {
				alert(response);
				}	*/
                             } 
                            },
                 password:
                            {
                            required: true,
                            minlength:5,
                            maxlength:10
                            },
                  con_password:
                          {
                      required: true,
                      equalTo:"#password"
                          }
                          
               },
        messages:
                {
              first_name:
                       {
                        required: "please enter first your name."
                       },
                last_name:
                        {
                       required: "please enter your last name"
                        },
                contact:
                        {
                         required: "please enter your mobile no.",
                         digits: "pease enter only digits."
                        },
                 email_id:
                         {
                         required: "please enter your email.",
                         email:"please enter the valid email.",
                         remote: "email already exist."
                         },
                 password:
                            {
                            required: "please enter password.",
                            minlength:"password nimmum 5 charecter",
                            maxlength:"password maximum 10 charecter"
                            },
                  con_password:
                          {
                      required:"please re enter password.",
                      equalTo:"please enter the sam epassword."
                          }
            
                }
    });
});


