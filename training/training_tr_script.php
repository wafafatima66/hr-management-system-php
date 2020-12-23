<script>
                        $('.view_training').click(function(){
                          
                          var emp_id = $(this).data('id');
                          //$('.modal-body .view_emp_id').val(emp_id);
                          $.ajax({
                              url:'view_training.php?',
                              type : 'post',
                              data: {
                                emp_id : $(this).data("id") , title_of_training : $(this).data("todo")
                              },
                               dataType: 'json',
                              success : function(result){
                                  
                                  $('#emp_id').val(result.emp_id);
                                  $('#title_of_training').val(result.title_of_training);
                                  
                                  $('#type_of_training').val(result.type_of_training);
                                  
                                  $('#from_date').val(result.from_date);
                                  $('#to_date').val(result.to_date);
                                  $('#no_of_hrs').val(result.no_of_hrs);
                                  $('#venue').val(result.venue);
                                  $('#province').val(result.province);
                                  
                                  $('#agency').val(result.agency);
                                  $('#title').val(result.title);

                                  $('#add_speaker_wrapper').html(result.speakers);
                                  $('#add_sponsor_wrapper').html(result.sponsors);
                             
                                // $('#space').html(result);
                              }
                          });
                          
                        });
                    </script>