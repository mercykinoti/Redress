			<div class="news-grids-w3l">
				<div class="col-xs-2"></div>
				<div class="col-xs-8 news-grid">
					<a href="#" data-toggle="modal" data-target="#myModal">
						<?php if ( has_post_thumbnail() ) {
						  the_post_thumbnail();
						} ?>
					</a>
					<div class="news-text">
						<div class="news-events-agile">
							<h5>
								<a href="#" data-toggle="modal" data-target="#myModal"><?php the_date(); ?></a>
							</h5>
							<div class="post-img">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<ul>
										<li>
											<span class="fa fa-comments" aria-hidden="true"></span>
										</li>
										<li>
											<span class="fa fa-heart" aria-hidden="true"></span>
										</li>
										<li>
											<span class="fa fa-share" aria-hidden="true"></span>
										</li>
									</ul>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<h6><?php permalink(); ?><?php the_title(); ?></h6>
							</a>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-2"></div>
			</div>