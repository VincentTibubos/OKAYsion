
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>OKAYsion &copy; 2018</p>
                </div>

               <!--
 <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Hi Admin!</h2>
            </div>
          </header>

                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's 
				  development at https://bootstrapious.com/donate. It is part of the license conditions.
				  Thank you for understanding :)
                </div>-->
              </div>
            </div>
          </footer>
          
        </div>
      </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="logoutm" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Logout</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Do you really want to logout?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal"  onclick="redirout();">Yes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
      </div>
      
    </div>
  </div>
  

    <!-- Javascript files-->
    <script src="<?php echo base_url();?>/assets/lib/jquery/jquery.min.js"> </script>
    <script src="<?php echo base_url();?>/assets/ajax/jquery.min.js"> </script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url();?>/assets/dashboard/js/front.js"></script>


    <script>
      function redirout(){
              window.location="<?php echo base_url()?>logout";
      }
    </script>
    <script>
      $(document).ready(function(){
        $('.calendar .day').click(function(){
          day_num = $(this).find('.day_num').html();
          if(day_num!=null){
            daydet=prompt('Enter details in day '+day_num,$(this).find('.content .maincontent').html());
            if(daydet!=null){
                       //alert(daydet+day_num+" "+window.location);
              $.ajax({
                url: window.location,
                type: "POST",
                data: {
                    day: day_num,
                    details: daydet
                },
                success: reloadtable,//function(data){
                     //location.reload();
                      //alert('request success'+data);
                   //},
                error: function(xhr, textStatus, errorThrown){
                       alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                }
              });
            }
          }
        });
        /*$('.calendar .day .content').click(function(){
          day_num = selectdaynum();
          if(day_num!=null){
            daydet=prompt('Enter details in day '+day_num,$(this).find('.maincontent').html());
            if(daydet!=null){
                       //alert(daydet+day_num+" "+window.location);
              $.ajax({
                url: window.location,
                type: "POST",
                data: {
                    day: day_num,
                    details: daydet
                },
                success: reloadtable,//function(data){
                     //location.reload();
                      //alert('request success'+data);
                   //},
                error: function(xhr, textStatus, errorThrown){
                       alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                }
              });
            }
          }
        });*/
        function reloadtable(data){
          //alert(data);
          //$('#usercalendar').html(data); 
       //location.reload();
         $('#usercalendar').html(data);

         //return true;
        }

        function selectdaynum(){
          return $(this).find('.calendar . day .day_num').html();
        }
      });
    </script>

  </body>
</html>