<?php
/** 
 * Template Name: Plantilla del contacte
 * Template Post Type: page 
*/
?>

<?php get_header()?>

    <section class="d-flex flex-column text-center vh-100 container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-sm-6">
                <form>
                    <div class="form-group col-12">
                        <label for="Name">Nom</label>
                        <input type="text" class="form-control" id="Name" aria-describedby="Name"
                            placeholder="Introdueix el teu nom">
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Introdueix un email">
                    </div>
                    <div class="form-group col-12">
                        <label for="Assumpte">Assumpte</label>
                        <input type="text" class="form-control" id="Assumpte" aria-describedby="Assumpte"
                            placeholder="Assumpte">
                    </div>
                    <div class="form-group col-12">
                        <label for="Message">Missatge</label>
                        <textarea class="form-control" id="Message" rows="3"></textarea>
                    </div>
                    <div class="form-check text-start col-12">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Checkbox
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
        <div class="row mt-5 mx-5 mb-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.158671633507!2d2.6867600765913684!3d39.601107971582465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297935d441c9571%3A0xa01dc49e4565742f!2sEs%20Liceu!5e0!3m2!1sca!2ses!4v1765362553533!5m2!1sca!2ses"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <?php get_footer() ?>