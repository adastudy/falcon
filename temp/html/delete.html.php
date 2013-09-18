	<h3>当天被删除文件数：<font color=#D9773A><?php echo $this->data->countdel; ?></font></h3>
	<table class="mtable" width="100%" border="0" cellspacing="0" cellpadding="0">
        	<thead>
            <tr>
                <td width="102">ID</td>
                <td width="140">服务器IP</td>
                <td width="130">报警内容</td>
                <td width="80">危险等级</td>
                <td width="80">处理结果</td>
                <td width="130">监控时间</td>
                <td>文件详情</td>
            </tr>
            </thead>
            <?php foreach($this->data->all as $this->data->rowscountdel) {  ?>
			<tr>
				   <td class="ftd"><?php echo $this->data->rowscountdel['id']; ?></td>
				   <td><?php echo $this->data->rowscountdel['ip']; ?></td>
				   <td><?php echo $this->data->rowscountdel['content']; ?></td>
				   <td><?php echo $this->data->rowscountdel['level']; ?></td>
				<?php if($this->data->rowscountdel['remove']=="已处理") {  ?>
				<td><font color=#D9773A><?php echo $this->data->color; ?><?php echo $this->data->rowscountdel['remove']; ?></font></td>
				<?php } else { ?>
				<td><?php echo $this->data->rowscountdel['remove']; ?></td>
				<?php } ?>
			    <td><?php echo $this->data->rowscountdel['date']; ?></td>
			    <td><a href="javascript:;" class="viewbtn" onClick="showdiv('div_<?php echo $this->data->rowscountdel['id']; ?>');">查看源代码</a></td>
            </tr>	
			<tr id="div_<?php echo $this->data->rowscountdel['id']; ?>" style="display:none;">
				<td class="ftd" colspan="7"><div class="codebox"><?php echo htmlspecialchars($this->data->rowscountdel['source']); ?></div></td>
			</tr>
			<?php } ?>
            
        </table>
