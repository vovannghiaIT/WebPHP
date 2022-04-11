<?php

namespace App\Library;

class Route
{
    function __construct($page='site')
    {
      if($page=='site')
      {
            $this->url_site();
      }
      else
      {
        $this->url_admin();
      }
    }
    //hàm tùy biến url trang người dùng
    function url_site()
    {
      $pathView="views/frontend/";
      //th1: không có index.php không có tham số
      if(!isset($_REQUEST["option"]))
      {
       
        $pathView.='home.php';
      }
      else
      {
        $pathView.= $_REQUEST["option"];
         //th2 có tham số sau index.php?option=...
         //th2-1 có option và id
         if(isset($_REQUEST["id"]))
         {
           $pathView.= '-detail.php';
         }
         else{
          if(isset($_REQUEST["cat"]))
          {
           ;
           $pathView.= '-category.php';

          }
          else
          {
             
               $pathView.= '.php';
          }
        }
      

      }
     
        //if(file_exists($pathView))
       // {
          require_once($pathView);
       // }
       // else{
        //  die('lỗi trang');
       // }
       

    }
    //Hàm tuỳ biến trang quản trị

  function url_admin()
  {
    $pathView = "../views/backend/";
    if (!isset($_REQUEST["option"])) {
      //TH1: Không chứa option
      $pathView .= 'dashboard/index.php'; // dashboard--> thư mục
    } else {
      $pathView .= $_REQUEST["option"] . '/';
      if (isset($_REQUEST["cat"])) {
        $pathView .= $_REQUEST["cat"] . '.php';
      } else {
        //TH3: URL có chứa option và chứa cat
        $pathView .= 'index.php';
      }
    }
    // Kiểm tra pathView có tồn tại hay không?
    // if (file_exists($pathView)) {
    require_once($pathView);
    // } else {
    // die('Loi trang');
    // }
  }
  //index.php?option=product&cat=insert-->them
    //                        cat = update -->cap nhat
    //delete-> xoa
    //deltrash-->xoa vao thung ra
    //reltrash -->khoi phuc mau tin
    //trash--> quan li mau tin rac
    //status --> trang thai

}

