<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
body{
    background-color: lightgray;
}
header{
    width: 100%;
    background-color:green;
    padding: 5px;
    display: flex;
    justify-content:space-between;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.9);
    position: sticky;
    top: 0;
    bottom: 0;
    z-index: 1000;
}
header a{
    text-decoration: none;
    margin-left: 15px;
    padding: 5px;
    color: white;
}
header a:hover{
       background-color: lightgray;
       color: orangered;
}
header a::after{
    background-color: lightgray;
    color: orangered;
}
h1{
    text-align: center;
    color: green;
    margin: 1.5% 0;
}

/*--------------login design-----------------------*/


/*------------------------home page-------------------------*/
.home-content{
     width: 96%;
     height: auto;
     margin: 2%;
     padding: 15px;
    
}
.home-content .message{
     width: 94%;
     margin: 0 3%;
     background-color: #257702f5;
     color: white;
     border-radius: 15px;
     padding: 10px;
     box-shadow: 0 2px 5px rgba(0, 0, 0, 0.9);
}
.home-content .message p{
    text-align: justify;
}
.home-content .stars{
    width: 20%;
    height: auto;
    margin: 5px 40%;
    margin-top: 15px;
    padding: 15px;
    text-align: center;
}
.stars .fa{
    color: orange;
}
/*------------------About------------------------------*/
.about-content{
      width: 98%;
      height: auto;
      margin:0 1%;
      padding: 15px;
      border: 1px solid green;
      border-top: none;
}
.about-content .mission-vision-value, .team-content,.founder{
      width: 90%;
      height: auto;
      margin:5px 5% ;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.9);
}
.about-content .mission-vision-value, .founder, .team-members  p{
     text-align: justify;
}
.founder-image-text, .team-members{
      width: 100%;
      display: flex;
      justify-content: space-between;
}
.founder-image-text img, .team-members img{
     width: 200px;
     height: auto;
     margin-right: 5px;
     border: 3px solid whitesmoke;
     border-radius: 48%;
}
.team-members img{
    width: 80px;
     height: auto;
     margin-right: 5px;
     border: 3px solid whitesmoke;
     border-radius: 50%;
}
.testimonials{
      width: 90%;
      height: auto;
      margin:5px 5% ;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.9);
}
.testimonials img{
    width: 100px;
     height: auto;
     margin-right: 5px;
     border: 3px solid whitesmoke;
     margin-bottom: -10%;
}
.students{
    display: flex;
}
.para-name p{
     text-align: justify;
}
footer{
    background-color: green;
    color: white;
    font-size: x-small;
    text-align: center;
    font-weight: 300;
}
/*--------------------------contact page------------------------*/
.contact-header{
    width: 98%;
    height: auto;
    margin: 0 1%;
    border: 1px solid green;
    border-top: none;
    margin-top: -15px;
}
.contact{
    width: 90%;
    height: auto;
    margin: 15px 5%;
    box-shadow: 0 2px 5px rgba(0, 0, 20, 0.9);
    border-radius: 5px;
    padding: 15px;
}
form{
    width: 60%;
    margin: 2px 20%;
}
.contact form .details, label{
    width: 80%;
     margin: 5px 10%;
     height: 30px;
     padding: 15px;
     border-radius: 25px;
     border: none;
     outline: none;
     border-bottom: 1px solid green;
     font-family: Verdana, Geneva, Tahoma, sans-serif;
}
textarea{
    width: 80%;
    margin: 5px 10%;
    padding: 15px;
}
.send-message{
    width: 20%;
    margin: 10px 10%;
    background-color: green;
    color: white;
    height: 30px;
    padding-left: 15px;
    font-weight: 600;
    border: none;
    outline: none;
    cursor: pointer;
}
.icons{
    width: 40%;
    margin: 6px 30%;
    background-color: green;
    height: 30px;
    padding-top: 6px;
    margin-bottom: 25px;
}
.icons .fa{
    color: white;
}
.icons a{
    text-decoration: none;
    color: white;
    margin-left: 15px;
}

/*---------------------------------resource page-------------------------------*/
.resource-content{
    width: 96%;
    height: auto;
    margin: 0 2%;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 20, 0.9);
}
.resource-content a{
    color: green;
    font-weight: 600;
}
.siyavula-textbook{
    display: flex;
    justify-content: space-between;
}
.resource-content p{
      text-align: justify;
}
.grade-container{
    width: 96%;
    height: auto;
    margin: 10px 2%;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 20, 0.9);
}
.grade-container .row{
      display: flex;
      justify-content: space-between;
}
.row .col1, .col2, .col3{
    width: 96%;
    height: auto;
    margin: 0 2%;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 20, 0.9);
    margin-top: 25px;
}
.row .col1 a, .col2 a, .col3 a{
    text-decoration: none;
}
.recomanded-books{
    width: 96%;
    height: auto;
    margin: 0 2%;
    padding: 30px;
    box-shadow: 0 2px 5px rgba(0, 0, 20, 0.9);
    margin-top: 25px;
    background-color: white;
}
.recomanded-books p{
       text-align: justify;
}
.row h5, .recomanded-books h6{
      color: green;
      margin-bottom: 10px;
}

/*------------------------services page----------------------------------------*/
.service-container{
    width: 98%;
    height: auto;
    margin: 0 1%;
    padding: 15px;
    box-shadow: 0 0 10px rgba(0, 128, 0, 0.5);
    background-color: lightyellow;
}
.service-container h2{
     color: green;
     text-decoration:underline;
}
.service-container p{
    text-align: justify;
}
.service-container h3{
    color: green;
}
.why-mathsage{
    width: 98%;
    height: auto;
    margin: 10px 1%;
    padding: 15px;
    box-shadow: 0 0 10px rgba(10, 255, 20, 1);
    background-color: lightyellow;
}
.why-mathsage h4{
      color: green;
      margin-bottom: 15px;
}
.ser-ar {

    width: 98%;
    height: auto;
    margin: 10px 1%;
    display: flex;
    justify-content: space-between;
}
.colums{
    padding: 25px;
    box-shadow: 0 0 10px rgba(10, 0, 220, 1);
    background-color: lightyellow;
}
.our-services p{
     text-align: justify;
}



/*------------------------Align for small devices--------------------------*/
@media(max-width: 768px){
    /*------------------page header---------------*/
    header{
        font-size: 8px;
        font-family: 'Times New Roman', Times, serif;
        padding: 2px;
    }
    header div h3{
        font-size: 10px;
    }
    header a{
         margin-left: 5px;
    }

    /*----------elements----------------*/
    h1{
        font-size: 13px;
    }
    p{
            font-size: 10px;
    }
    a{
        font-size: 9px;
    }
  .fa{
        display: none;
    }
    h3{
        font-size: 13px;
        color:green;
    }
    strong{
        font-size: 10px;
    }
    img{
        display: none;
    }
    h2{
        font-size:12px;
    }
    /*-------about--------*/
    .mission-vision-value{
        width: 100%;
    }
    /*------login------*/
    .log-container{
        width: 100%;
        padding:0;
        margin: 0;
        border: none;
        margin-top: 50%;
    }
    .log-container p, .input-vlues, .signup-container p, 
    .s-input-vlues{
        width: 90%;
        margin-left: 5%;
    }

    /*-----log------*/
.signup-container{
        width: 100%;
        padding:0;
        margin: 0;
        border: none;
        margin-top: 30%;
   }
   /*-----------------services-----------------*/
   .why-mathsage h4{
        font-size: 10px;
   }
   .ser-ar{
      display: inline;
   }
   .ser-ar li{
       font-size: 9px;
   }
   /*-----contact page----*/
   .contact-header{
       margin-top: 40%;
   }
   .details{
       width: 100%;
   }
   .contact{
      width: 99%;
      margin: 0 0.5%;
      border: none;
      box-shadow: none;
   }
   .send-message{
         width: auto;
         height: auto;
   }
   .siyavula-textbook{
        display: inline;
        margin: 5px;
   }
    .grade-container .row{
       display: inline-block;
   }
   .icons i{
       display: none;
   }
   .icons{
       display: inline-block;
       background-color: white;
       color: green;
   }
   .icons a{
       color: green;
   }
   
}


/*-------------------------------messages styles----------------------------*/

.success {
            color: green;
            display: none;
        }
.error {
            color: red;
             display: none;
        }
@keyframes button{
      0%{
        transform: scale(0.1);
      }
      50%{
        transform: scale(0.5);
      }
      100%{
        transform: scale(1);
      }
}
/*--------------------the end of website designs----------------------------*/
</style>