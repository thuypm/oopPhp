<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<div class="container">    

    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info"> 
            <div class="panel-body" >
                    <form  class="form-horizontal" method="post" action="./progress.php">
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Họ và tên<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="fullName" maxlength="30" name="fullName" placeholder="" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField">Tuổi<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="age" name="age" 
                                style="margin-bottom: 10px" type="number" />
                            </div>     
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Điểm môn 1<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="firstPoint" name="firstPoint"  style="margin-bottom: 10px" type="number" />
                            </div>
                        </div>
                        <div id="div_id_password2" class="form-group required">
                         <label for="id_password2" class="control-label col-md-4  requiredField">Điểm môn 2<span class="asteriskField">*</span> </label>
                         <div class="controls col-md-8 ">
                            <input class="input-md textinput textInput form-control" id="secondPoint" name="secondPoint" 
                            style="margin-bottom: 10px" type="text" />
                        </div>
                    </div>
                    <div id="div_id_name" class="form-group required"> 
                        <label for="id_name" class="control-label col-md-4  requiredField"> Điểm môn 3<span class="asteriskField">*</span> </label> 
                        <div class="controls col-md-8 "> 
                            <input class="input-md textinput textInput form-control" id="thirdPoint" name="thirdPoint"  style="margin-bottom: 10px" type="text" />
                        </div>
                    </div>

                    <div id="div_id_company" class="form-group required"> 
                        <label for="id_company" class="control-label col-md-4  requiredField">Địa chỉ<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "> 
                         <input class="input-md textinput textInput form-control" id="address" name="address" placeholder="Địa chỉ" style="margin-bottom: 10px" type="text" />
                     </div>
                 </div> 
                 <div id="div_id_gender" class="form-group required">
                    <label for="id_gender"  class="control-label col-md-4  requiredField"> Giới tính<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 "  style="margin-bottom: 10px">
                        <select name="sex" id="sex">
                          <option value="male">Nam</option>
                          <option value="female">Nữ</option>

                      </select>
                  </div>
              </div>
              <div class="form-group"> 
                <div class="aab controls col-md-4 "></div>
                <div class="controls col-md-8 ">
                   <input type="submit" name="submit" value="Gửi thông tin" class="btn btn btn-primary" id="button-id-signup" />

               </div>
               <a href="./viewAll.php" style="text-align: center">xem kết quả</a>
           </div> 

       </form>
</div>
</div>
</div> 
</div>           