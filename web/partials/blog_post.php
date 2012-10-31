
                <div id="post-<?php echo $post->id; ?>">
                    <h2><?php echo $post->title; ?></h2>
                    <p class="muted">
                        Posted at <?php echo $post->date->format('m/d/Y H:i:s'); ?> by <?php echo $post->author->name; ?>
                    </p>
                    <div class="body">
                        <?php echo $post->body; ?>
                    </div>
                    <div class="tags">
                        <?php foreach($post->tags as $tag): ?>
                                <a href="/tags.php?tag=<?php echo $tag->getId();?>" class="btn btn-primary btn-small">
                                    <?php echo $tag->getName(); ?>
                                </a>
                        <?php endforeach; ?>
                    </p>
                    </div>
                </div>
