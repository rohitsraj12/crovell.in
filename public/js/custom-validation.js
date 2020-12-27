 /* START form submit buyersellerForm */ 
    $("#contactForm").validate({
        rules:{
       
              email: {
                required: true,
                 email: true
              },
            
              mobile: {
                required: true,
                 number: true,
                minlength: 10,
              },  
             message: {
                required: true,
                 maxlength: 500,
              },
              
           
        },
        messages:{          
            email:{
                required: "Enter Email id",
                minlength: "This field needs To be minimum of 2 characters"
            },
             mobile:{
                required: "Enter Mobile No",
               
            },
             message:{
                required: "Enter Your Message",
                maxlength: "This field needs To be maxlength of 500 characters"
               
            },
             
    }
    });