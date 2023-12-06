<?php


session_start();

// include("../Tung/DB_connection.php");

include_once("../Tung/DB_connection.php");
function getAllUser($conn)
{

    $sql = "SELECT * FROM user WHERE status =1";
   $stmt = $conn->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() >= 1) {
     $user = $stmt->fetchAll();
     return $user;
   }else {
   	return 0;
   }
}

$allUser = getAllUser($conn);

// print_r($allUser);

?>


<!DOCTYPE html>
<html lang="en">

<head>


       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Admin</title>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
       <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
       <link rel="stylesheet" href="./css/posts.css">

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>

<body>
       <!-- start heading -->
       <header>
              <span>Admin Setting</span>
       </header>
       <!-- end -->
       <!-- start body -->
       <section class="main-content-body">
              <div class="sidebar">
                     <h3>MENU</h3>
                     <ul>
                            <li>
                                   <a href="posts.html">
                                          <span class="icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></span>
                                          <span class="title">Quản lý bài đăng</span>
                                   </a>

                            </li>
                            <li>
                                   <a href="#">
                                          <span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                                          <span class="title">Quản lý bình luận</span>
                                   </a>

                            </li>
                            <li>
                                   <a href="User.php">
                                          <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                                          <span class="title">Quản lý người dùng</span>
                                   </a>

                            </li>
                            <li>
                                   <a href="#">
                                          <span class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
                                          <span class="title">Trở về trang chủ</span>
                                   </a>

                            </li>
                     </ul>
              </div>
              <div class="post-management-page">
                     <!-- <h3>Quản lý bài đăng</h3> -->
                     <!-- <div class="total-posts">
                            <table>
                                   <tr>
                                          <th>
                                                 <span>Tên bài đăng</span>
                                          </th>
                                          <th>
                                                 <span>Số lượng lượt xem</span>
                                          </th>
                                          <th>
                                                 <span>Số lượng bình luận</span>
                                          </th>
                                          <th>
                                                 <span>Số lượng lượt thích</span>
                                          </th>
                                          <th>
                                                 <span>Số lượng lượt không thích</span>
                                          </th>
                                          <th>
                                                 <span>Hành động</span>
                                          </th>
                                   </tr>
                                   <tr>
                                          <td class="name-post">
                                                 <span class="value">ĐẠI HỌC ADELAIDE, AUSTRALIA CẤP HỌC BỔNG ĐẾN
                                                        50%</span>
                                          </td>
                                          <td class="number-watch">
                                                 <span class="value">0</span>
                                          </td>
                                          <td class="number-comment">
                                                 <span class="value">0</span>
                                          </td>
                                          <td class="number-like">
                                                 <span class="value">0</span>
                                          </td>
                                          <td class="number-dislike">
                                                 <span class="value">0</span>
                                          </td>
                                          <td class="action-delete-post">
                                                 <span><i class="fa fa-ban" aria-hidden="true"></i></span>
                                          </td>
                                   </tr>
                            </table>
                     </div> -->
                     <h3>Quan Ly User</h3>
                     <!-- <p>Type something in the input field to search the table for first names, last names or emails:</p>   -->
<input id="myInput" type="text" placeholder="Search..">
                     <!-- <div class="action-post">
                            <table>
                                   <tr>
                                          <th>
                                                 <span>Tên bài đăng</span>
                                          </th>
                                          <th>
                                                 <span>Hành động</span>
                                          </th>
                                   </tr>
                                   <tr>
                                          <td class="name-post">
                                                 <span class="value">ĐẠI HỌC ADELAIDE, AUSTRALIA CẤP HỌC BỔNG ĐẾN
                                                        50%</span>
                                          </td>
                                          <td class="action-push-post">
                                                 <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                 <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                                          </td>
                                   </tr>
                            </table>
                     </div> -->

                     <!-- <div class="watch-post">
                            <h3>Demo</h3>
                            <iframe src="./showPost.html" frameborder="0"></iframe>
                     </div> -->


                    




                     <table class="table table-bordered table-light">
  <thead>
    <tr class="table-success">

     
      <th scope="col">First name </th>
      <th scope="col">last name</th>
      <th scope="col">email </th>
      <th scope="col">Password</th>
      <th scope="col">Ngay sinh </th>
      <th scope="col">gender</th>
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody   id="myTable" >

<?php foreach($allUser as $user) {?>


    <tr>
                                            <!-- <th scope="row">1</th> -->
                                          
                                            <td><?= $user['fname'] ?></td>
                                            <td><?= $user['lname'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['pass'] ?></td>
                                            <td><?= $user['ngaysinh'] ?></td>
                                            <td><?= $user['gender'] ?></td>
<td>


<a href="../Tung/BE/DeleteUser.php?id=<?= $user['id']?>" class="btn btn-danger">Ban</a>
                                            <!-- <a href="./BL/deleteteacher.php?id=<?= $teacher['id'] ?>" class="btn btn-danger">Delete</a> -->

</td>
    </tr>

    <?php }?>
  </tbody>
</table>
                     
              </div>
       </section>
       <script src="./js/posts.js"></script>
</body>

</html>