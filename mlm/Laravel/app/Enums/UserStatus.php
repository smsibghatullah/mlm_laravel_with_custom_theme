<?php
  
namespace App\Enums;
 
enum UserStatus:string {
    case Unpaid = 'unpaid';
    case Pending = 'pending';
    case Approved = 'approved';
   
}