<?php
/**
 * Template Name: Servicios
 */

get_header();
?>


<div class="banner-cont" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>);">
    <div class="title-banner">
        <?php the_title(); ?>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <div class="category-list">
            <p class="category-desc">Servicios en materia de seguridad industrial</p>
            <div class="grid">
                <div class="item">
                    <div class="icon">
                        <?php echo file_get_contents(get_template_directory_uri(  ).'/img/speaker.svg'); ?>
                    </div>
                    <div class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
                    <div class="desc">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, doloribus sint tempora aliquid ipsum, animi illo veniam eos rem, sit quaerat suscipit voluptatibus nam dolores excepturi. Itaque possimus eveniet quaerat.
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <?php echo file_get_contents(get_template_directory_uri(  ).'/img/speaker.svg'); ?>
                    </div>
                    <div class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
                    <div class="desc">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, doloribus sint tempora aliquid ipsum, animi illo veniam eos rem, sit quaerat suscipit voluptatibus nam dolores excepturi. Itaque possimus eveniet quaerat.
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <?php echo file_get_contents(get_template_directory_uri(  ).'/img/speaker.svg'); ?>
                    </div>
                    <div class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
                    <div class="desc">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, doloribus sint tempora aliquid ipsum, animi illo veniam eos rem, sit quaerat suscipit voluptatibus nam dolores excepturi. Itaque possimus eveniet quaerat.
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <?php echo file_get_contents(get_template_directory_uri(  ).'/img/speaker.svg'); ?>
                    </div>
                    <div class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
                    <div class="desc">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, doloribus sint tempora aliquid ipsum, animi illo veniam eos rem, sit quaerat suscipit voluptatibus nam dolores excepturi. Itaque possimus eveniet quaerat.
                    </div>
                </div>
            </div>
        </div>

        <div class="category-list">
            <p class="category-desc">Servicios en materia de seguridad industrial</p>
            <div class="grid">
                <div class="item">
                    <div class="icon">
                        <?php echo file_get_contents(get_template_directory_uri(  ).'/img/speaker.svg'); ?>
                    </div>
                    <div class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
                    <div class="desc">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, doloribus sint tempora aliquid ipsum, animi illo veniam eos rem, sit quaerat suscipit voluptatibus nam dolores excepturi. Itaque possimus eveniet quaerat.
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <?php echo file_get_contents(get_template_directory_uri(  ).'/img/speaker.svg'); ?>
                    </div>
                    <div class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
                    <div class="desc">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, doloribus sint tempora aliquid ipsum, animi illo veniam eos rem, sit quaerat suscipit voluptatibus nam dolores excepturi. Itaque possimus eveniet quaerat.
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <?php echo file_get_contents(get_template_directory_uri(  ).'/img/speaker.svg'); ?>
                    </div>
                    <div class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
                    <div class="desc">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, doloribus sint tempora aliquid ipsum, animi illo veniam eos rem, sit quaerat suscipit voluptatibus nam dolores excepturi. Itaque possimus eveniet quaerat.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
