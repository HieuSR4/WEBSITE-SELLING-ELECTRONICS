<?php
    include 'inc/header.php';
    // include 'inc/slider.php';
?>
<?php
	$login_check = Session::get('customer_login');
	if($login_check==true){
	   
	}
?>
<?php
    
    if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['submit'])){

        $insertCustomer = $cs->insert_customer($_POST);
    }
?>
<?php
   
    if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['login'])){

        $login_Customer = $cs->login_customer($_POST);
         header('Location:index.php');
    }
?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Đăng nhập</h3>
        	<?php
    		if(isset($login_Customer)){
    			echo $login_Customer;
    		}
    		?>
        	<form action="" method="post">
                	<input  type="text" name="email" class="field" placeholder="Enter email...">
                    <input  type="password" name="password" placeholder="Enter password...">
                 
                <p class="note">Nếu bạn quên mật khẩu hãy nhấp vào <a href="#">đây</a></p>
                <div class="buttons"><div><input type="submit" name="login" class="grey" value="Đăng nhập"></div></div>
            </form>
        </div>
    	<div class="register_account">
    		<h3>Đăng ký tài khoản mới</h3>
    		<?php
    		if(isset($insertCustomer)){
    			echo $insertCustomer;
    		}
    		?>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder="Enter name..." >
							</div>
							
							<div>
							   <input type="text" name="city" placeholder="Enter city..." >
							</div>
							
							<div>
								<input type="text" name="zipcode" placeholder="Enter zip-code...">
							</div>
							<div>
								<input type="text" name="email" placeholder="Enter email...">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address" placeholder="Enter address...">
						</div>
		    		    <div>
						    <input type="text" name="country" placeholder="Enter country...">
						</div>		        
	
		           <div>
		          <input type="text" name="phone" placeholder="Enter phone...">
		          </div>
				  
				  <div>
					<input type="text" name="password" placeholder="Enter password...">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table>  
		   <div class="search"><div><input type="submit" name="submit" class="grey" value="Tạo tài khoản"></div></div><br>
		    
		    <div class="clear"></div><br>
		    <p>Bằng cách nhấp vào "Tạo tài khoản", bạn đồng ý với <a href="#">các điều kiện</a>.</p>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php
    include 'inc/footer.php';
?>

