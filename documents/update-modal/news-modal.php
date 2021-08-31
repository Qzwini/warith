<div class="modal fade" id="news<?php echo $rownews['ID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">

                    مجلة ص والقرأن ذي الذكر

                </h5>

            </div>
            <form method="post" enctype="multipart/form-data" action="logic/news.php">
                <div class="modal-body">



                    <div class="social">
                        <label class="form-label" for="customFile">title</label>
                        <div class="input-group mb-3">
                            <input type="text" value="<?php echo $rownews['name']; ?>" name="title"
                                class="form-control tx-area" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" required>
                        </div>
                    </div>





                    <div class="about ">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">description</label>
                            <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1"
                                rows="3" required>
                            <?php echo $rownews['description']; ?>
                            </textarea>
                        </div>
                    </div>

                    <div class="social mt-3">
                        <label class="form-label " for="social">download links</label>
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"> download </span>
                            </div>
                            <input type="text" value="<?php echo $rownews['linki']; ?>" name="linki"
                                class="form-control" aria-label="linki" aria-describedby="basic-addon1">
                        </div>
                    </div>



                    <div class="about mt-2">
                        <input type="hidden" name="id" value="<?php echo $rownews['ID']; ?>" class="form-control"
                            id="customFile" />


                    </div>


                    <div class="about">
                        <input type="hidden" name="imgnews" value="<?php echo $imageURL ?>" class="form-control"
                            id="customFile" />


                    </div>
                    <div class="about">
                        <label class="form-label mt-2" for="customFile">upload news image</label>
                        <input type="file" name="imgnews" value="<?php echo $imageURL ?>" class="form-control"
                            id="customFile" />
                        <img src="<?php echo $imageURL ?>" height="150" width="150" class="mt-2">


                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-link" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-light">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>