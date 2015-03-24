
	    <div class="container-fluid">
	    	<div class="row">
	    		<div class="col-md-2 sidebar">
	   			    <div class="panel panel-default">
	           			<div class="panel-heading">
	              			<h3 class="panel-title">操作什么</h3>
	            		</div>
	            		<div class="panel-body">
					   		<ul class="nav nav-sidebar">
		                        <li><a href="#">报告(未开)</a></li>
		                        <li><a href="#">分析(未开)</a></li>
                    </ul>
						</div>
					</div>
				</div>
				<div class="col-md-10 sidebar">
					<table class="table table-hover table-bordered table-condensed">
					  <thead class="info">
					  	 <th>Task_ID</th><th>标题</th><th>内容</th><th width="30px">状态</th>
					  	 <th>推送时间</th><th>删除</th>
					  </thead>
					  <tbody>
					  <?php for($i=0;$i<count($task_info);$i++):?>
					  	<tr data-toggle="modal" data-target="#myModal" >
					  		<td class="row"><?=$task_info[$i]['task_id']?></td>
					  		<td><?=$task_info[$i]['title']?></td>
					  		<td><p width="30px"><?=$task_info[$i]['content']?></p></td>
					  		<td width="150px"><?if($task_info[$i]['returnType']==0){
					  			echo "成功";
					  		}else{
					  			echo "失败";
					  		}?></td>
					  		<td><?=$task_info[$i]['createTime']?></td>
					  		<td>
								<a href=<?php echo base_url('index.php/task_list/del_task/'.$task_info[$i]['task_id'])?>><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
					  		</td>
					  	</tr>
					  <?php endfor?>
					  </tbody>
					</table>
					<nav>
					  <ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
				<!-- daModal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel"><strong>应用信息</strong></h4>
				      </div>
				      <div class="modal-body">
				      	<table class="table table-striped table-bordered">
				      		<tbody >
				      			<tr>
				      				<td><strong>应用名:</strong></td>
				      				<td></td>
				      			</tr>
				      			<tr>
				      				<td><strong>应用包名:</strong></td>
				      				<td>com.gkt.yyhezi</td>
				      			</tr>
				      				<tr>
				      				<td><strong>ACCESS ID:</strong></td>
				      				<td>2100096125</td>
				      			</tr>
				      				<tr>
				      				<td><strong>ACCESS KEY:</strong></td>
				      				<td>A38VLQ74Y7BK</td>
				      			</tr>
				      				<tr>
				      				<td><strong>SECRET KEY:</strong></td>
				      				<td>b80c534e980d3337416b129b41bec365</td>
				      			</tr>
				      				<tr>
				      				<td><strong>分类:</strong></td>
				      				<td>工具</td>
				      			</tr>
				      		</tbody>
				      	</table>

					  <!-- <p> 应用名：应用盒子</p>
					       <p> 应用包名：com.gkt.yyhezi</p>
					       <p> ACCESS ID：2100096125</p>
					       <p> ACCESS KEY：A38VLQ74Y7BK</p>
					       <p> SECRET KEY：b80c534e980d3337416b129b41bec365</p>
					       <p> 分类：工具</p> -->
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				      </div>
				    </div>
				  </div>
				</div>
				</div>
				</div>
			</html>