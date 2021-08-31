<div class="modal fade" id="speaker<?php echo $rowspeaker['ID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">SPEAKER</h5>

            </div>
            <form method="post" enctype="multipart/form-data" action="logic/speaker.php">
                <div class="modal-body">

                    <div class="social">
                        <label class="form-label" for="customFile">title</label>
                        <div class="input-group mb-3">
                            <input type="text" value="<?php echo $rowspeaker['name']; ?>" name="title" class="form-control tx-area" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                    </div>

                    <div class="about">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">description</label>
                            <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1" rows="3" required>
                            <?php echo $rowspeaker['description']; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="about">
                        <input type="hidden" name="id" value="<?php echo $rowspeaker['ID']; ?>" class="form-control" id="customFile" />


                    </div>
                    <div class="about">
                        <input type="hidden" name="imgnews" value="<?php echo $imageURL ?>" class="form-control" id="customFile" />


                    </div>
                    <div class="about">
                        <label class="form-label mt-2" for="customFile">upload news image</label>
                        <input type="file" name="imgnews" value="<?php echo $imageURL ?>" class="form-control" id="customFile" />
                        <img src="<?php echo $imageURL ?>" height="150" width="150" class="mt-2">


                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class=" btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>