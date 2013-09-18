	<h3>当天发现新增可疑文件数：<font color=#D9773A><?php echo $this->data->countkeyword; ?></font></h3>
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
            <?php foreach($this->data->all as $this->data->rowskeyword) {  ?>
			<tr>
				   <td class="ftd"><?php echo $this->data->rowskeyword['id']; ?></td>
				   <td><?php echo $this->data->rowskeyword['ip']; ?></td>
				   <td><?php echo $this->data->rowskeyword['content']; ?></td>
				   <td><?php echo $this->data->rowskeyword['level']; ?></td>
				<?php if($this->data->rowskeyword['remove']=="已处理") {  ?>
				<td><font color=#D9773A><?php echo $this->data->color; ?><?php echo $this->data->rowskeyword['remove']; ?></font></td>
				<?php } else { ?>
				<td><?php echo $this->data->rowskeyword['remove']; ?></td>
				<?php } ?>
			    <td><?php echo $this->data->rowskeyword['date']; ?></td>
			    <td><a href="javascript:;" class="viewbtn" onClick="showdiv('div_<?php echo $this->data->rowskeyword['id']; ?>');">查看源代码</a></td>
            </tr>	
			<tr id="div_<?php echo $this->data->rowskeyword['id']; ?>" style="display:none;">
				<td class="ftd" colspan="7"><div class="codebox"><?php echo htmlspecialchars($this->data->rowskeyword['source']); ?></div></td>
			</tr>
			<?php } ?>
            
        </table>
