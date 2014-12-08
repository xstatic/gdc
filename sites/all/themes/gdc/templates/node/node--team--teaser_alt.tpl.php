<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>
        <?php
// We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        ?>                
        <div class="team">
            <div class="team-item img-wrp"><?php print render($content['field_team_image']); ?>
                <div class="overlay"></div>
                <div class="overlay-wrp">                                        
                    <ul class="social-icons overlay-content">
                        <?php print render($content['field_team_social']); ?>
                    </ul>
                </div>
            </div>
            <div class="team-item team-member-info-wrp">
            <div class="team-name">
                <h5><?php print $title; ?></h5>
                <span><?php print render($content['field_team_position']); ?></span>
            </div>
            <div class="team-about">
                <p><?php print $node->body['und'][0]['safe_summary'];  ?></p>
            </div>             
            <div class="team-about">
                <div id="dexp-accordions-wrapper-<?php print $node->nid; ?>" class="panel-group default">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="collapsed" data-parent="#dexp-accordions-wrapper-<?php print $node->nid; ?>" data-toggle="collapse" href="#dexp-accordion-item-<?php print $node->nid; ?>">Read more</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="dexp-accordion-item-<?php print $node->nid; ?>" style="height: 79px;">
                            <div class="panel-body"> 
                                <?php print render($content['body']); ?>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="team-email"><a href="#"><i class="icon-envelope"></i> <?php //print render($content['field_team_email']); ?> </a></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div> 


