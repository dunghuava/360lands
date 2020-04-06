<section id="category" class="sec-home-page">
	<div class="container PAGE">
		<h2 class="page-title"><?=$page_name?></h2>
		<section class="bg-w">
			<div class="row m0">
				<?php
					$k=1;
					$row=1;
					$col=0;
					$col_xs=null;
					foreach ($arr_category as $category){
					if ($row<2){
						if ($k==1 || $k==3){
							$col_xs=' col-xs-8';
						}
						if ($k==2 || $k==4){
							$col_xs=' col-xs-4';
						}
					}else{
						$col_xs=' col-xs-4';
					}
					if ($row==1){
						if($k>0 && $k<3){
							$col=4;
						}else{
							$col=2;
						}
					}else{
						$col=2;
					}
					if ($k%4==0){ $row++;}					
				?>
					<div class="col-md-<?=$col.$col_xs?> p2 rds5">
						<a title="<?=$category['category_name']?>" href="<?=base_url('category/'.$category['category_slug'])?>">
							<div class="item-category rds5">
								<img src="<?=img_url($category['category_image'])?>" alt="">
								<div class="cate-warraper relative rds5">
									<div class="category-name-overlay rds5">
										<p class="m0"><?=$category['category_name']?></p>
										<p class="m0 hidden-xs"><span class="fa fa-eye"></span>&nbsp;<?=rand(0,100)?> tin</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php $k++;} ?>
			</div>
		</section>
	</div>
</section>