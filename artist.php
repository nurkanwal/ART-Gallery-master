<?php include("includes/head.php"); ?>
<?php include("includes/connection.php");?>
<!DOCTYPE html>
<html>
 <head>
     <title>Artists</title>

     <style>

         .desc-title{
            color:#2d70d5;
            font-variant: small-caps;
            font-family: "Yu Gothic UI Light";
            font-size: 24px;
            font-weight: bold;
            position: relative;
            top: 0px;
            left: 5px;
            text-decoration: none;
        }
        .desc-content{
            position: relative;
            font-size: 18px;
            font-family:  "Yu Gothic UI Light";

            top: 0px;

        }
        .desc-content2{
            position: relative;
            font-size: 15px;
            color: #aaa;
            font-family:  "Yu Gothic UI Light";
            top: 0px;
            left: 5px;
            text-decoration: none;
        }
         .desc-content2:hover{
            border-bottom: 1px solid #aaa;
        }

       .name {
        font-weight:bold;
          text-indent: 80px;
          margin-top: -100px;
          font-size: 17px;
          font-family: "Yu Gothic UI Light";
          color: rgb( 00, 00, 00 );
          text-align: left;
          position: absolute;
          left: -20px;
          top: 220px;
          width: 215px;
          height: 35px;
          z-index: 19;
        }

       .searchbar{
           border-radius: 8px;
           box-shadow: 1px 1px 2px 0px rgb( 55, 52, 52 );
           border: 0.5px solid;
           margin-left:20px;
          
          background-color: white;
          position: relative;
          left: 128px;
          top: -28px;
          width: 250px;
          height: 35px;
       }
       .searchbtn{
            margin-left:20px;
           border-radius: 5px;
           box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
           border: 1px solid rgb(33,33,33);
          font-weight: bold;
          background-color: black;
          font-family: "Yu Gothic UI Light";
          color: white;
          position: relative;
          left: 400px;
          top: -70px;
          width: 150px;
          height: 40px;
        }
        .searchbtn:hover{
            background-color:#D5966c;}

         .photo {
            position: relative ;
            width: 200px;
           height : 250px;
           margin: 0  0px 0 0px;
        }

     .pic-table{
            border: 3px solid white;
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);
            background-color: #fafafa;
            border-collapse: collapse;
            float: left;
            margin: 0px 50px 50px 0px;
        }
        .space{
          margin-top: 200px;
          position: relative;
          left:130px;
        }
</style>

 </head>
 <form action="searchartist.php" method="POST">
 <body>
     <p class="name" align = "left">Search: 

     <input class="searchbar" type="text" id="artistname" name="artistname">
     <input class="searchbtn" type="submit" name="search" value="Search">
     </p>
     </form>

    <?php
            $query_category="SELECT user_imagepath, user_fname, user_lname,user_id FROM user where user_type = 'Artist'";
            $result_category = mysqli_query($conn,$query_category);
 if(mysqli_num_rows($result_category) <=0)
        {
            echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 align="Center">No Artist Available </h1>';
        }
        else{
            while($row=mysqli_fetch_array($result_category)){

                  echo ' <div class="space">
                            <table class="pic-table">
                                <tr>
                                    <td>
                                        <a  href= "pictures/profile/'.$row['user_imagepath'].'"> <img class="photo" src="pictures/profile/'.$row['user_imagepath'].'"> </a>'.

                                        '<br><a class="desc-title" href="artist_info.php?id='.$row['user_id'].'">  '.$row['user_fname'].' '.$row['user_lname'].' </a> <br>

                                        <a class="desc-content2" href="artist_info.php?id='.$row['user_id'].'">  See More. . . </a>
                                    </td>
                                </tr>
                            </table>
                        </div>';
            }
          }
      ?>
     </div>
 </body>
 </html>

 <?php

  include("includes/footer.php"); ?>