<div class="comment-form">
	<legend><?php echo __d('croogo', 'Bình luận'); ?></legend>
	<?php
		$type = $types_for_layout[$data[$model]['type']];

		if ($this->request->params['controller'] == 'comments') {
			$backLink = $this->Html->link(__d('croogo', 'Go back to original post') . ': ' . $data[$model]['title'], $data[$model]['url']);
			echo $this->Html->tag('p', $backLink, array('class' => 'back'));
		}

		$formUrl = array(
			'plugin' => 'comments',
			'controller' => 'comments',
			'action' => 'add',
			'Node',
			$data[$model]['id'],
		);
		if (isset($parentId) && $parentId != null) {
			$formUrl[] = $parentId;
		}

		echo $this->Form->create('Comment', array('url' => $formUrl));
			if ($this->Session->check('Auth.User.id')) {
				echo $this->Form->input('Comment.name', array(
					'label' => __d('croogo', 'Họ tên'),
					'value' => $this->Session->read('Auth.User.name'),
					'readonly' => 'readonly',
					'class' => 'form-control'
				));
				echo $this->Form->input('Comment.email', array(
					'label' => __d('croogo', 'Email'),
					'value' => $this->Session->read('Auth.User.email'),
					'readonly' => 'readonly',
					'class' => 'form-control'
				));
				echo $this->Form->input('Comment.website', array(
					'label' => __d('croogo', 'Website'),
					'value' => $this->Session->read('Auth.User.website'),
					'readonly' => 'readonly',
					'class' => 'form-control'
				));
				echo $this->Form->input('Comment.body', array('label' => false,'class' => 'form-control'));
			} else {
				echo $this->Form->input('Comment.name', array(
					'label' => false,
					'placeholder' => 'Họ tên của bạn',
					'class' => 'form-control'
				));
				echo $this->Form->input('Comment.email', array(
					'label' => false,
					'placeholder' => 'Địa chỉ email',
					'class' => 'form-control'
				));
				echo $this->Form->input('Comment.website', array(
					'label' => false,
					'placeholder' => 'Website',
					'class' => 'form-control'
				));
				echo $this->Form->input('Comment.body', array(
					'label' => false,
					'placeholder' => 'Nội dung',
					'class' => 'form-control'
				));
			}

			if ($type['Type']['comment_captcha']) {
				echo $this->Recaptcha->display_form();
			}
		echo $this->Form->end(array(
			'div' => false,
			'labe' => 'Xác nhận',
			'class' => 'btn btn-info'
		));
	?>
</div>