<legend><i class="glyphicon glyphicon-book"></i> Tài liệu học tập</legend>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Hình ảnh</th>
				<th>Tên tài liệu</th>
				<th>Môn học
				<th>Download</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($attachments as $key => $attachment) { ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td>
						<?php
							$mimeType = explode('/', $attachment['Attachment']['mime_type']);
							$imageType = $mimeType['1'];
							$mimeType = $mimeType['0'];
							$imagecreatefrom = array('gif', 'jpeg', 'png', 'string', 'wbmp', 'webp', 'xbm', 'xpm');
							if ($mimeType == 'image' && in_array($imageType, $imagecreatefrom)) {
								$imgUrl = $this->Image->resize('/uploads/' . $attachment['Attachment']['slug'], 100, 200, true, array('alt' => $attachment['Attachment']['title']));
								$thumbnail = $this->Html->link($imgUrl, $attachment['Attachment']['path'],
								array('escape' => false, 'class' => 'thickbox', 'title' => $attachment['Attachment']['title']));
							} else {
								$thumbnail = $this->Html->thumbnail('/croogo/img/icons/page_white.png', array('alt' => $attachment['Attachment']['mime_type'])) . ' ' . $attachment['Attachment']['mime_type'] . ' (' . $this->Filemanager->filename2ext($attachment['Attachment']['slug']) . ')';
							}
							echo $thumbnail;
						?>
					</td>
					<td><?php echo $attachment['Attachment']['title']; ?></td>
					<td><?php echo $attachment['Subject']['name']; ?></td>
					<td>
						<?php 
							echo $this->Html->tag('div',
								$this->Html->link(
									$this->Html->url($attachment['Attachment']['path'], true),
									$attachment['Attachment']['path'],
									array('target' => '_blank')
								), array('class' => 'ellipsis')
							)
						?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>