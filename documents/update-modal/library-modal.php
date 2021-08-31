<div class="modal fade" id="library<?php echo $rowlibrary['ID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Library</h5>

            </div>
            <form method="post" enctype="multipart/form-data" action="logic/library.php">
                <div class="modal-body">

                    <div class="social">
                        <label class="form-label" for="customFile">title</label>
                        <div class="input-group mb-3">
                            <input type="text" value="<?php echo $rowlibrary['title']; ?>" name="title" class="form-control tx-area" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                    </div>

                    <div class="about">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">description</label>
                            <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1" rows="3" required>
                            <?php echo $rowlibrary['description']; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="about">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">type</label>
                            <!-- <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1" rows="3"></textarea> -->
                            <div class="select">
                                <select class="form-control" name="type" id="" style="text-align: right;">
                                    <?php

                                    if ($rowlibrary['type'] == "صورة") {



                                    ?>
                                        <option value="صورة" selected> صورة </option>
                                        <option value="فيديو"> فيديو </option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="صورة"> صورة </option>
                                        <option value="فيديو" selected> فيديو </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="select_arrow">
                            </div>
                        </div>
                    </div>
                    <div class="social">
                        <label class="form-label" for="customFile">link</label>
                        <div class="input-group mb-3">
                            <input type="text" value="<?php echo trim($rowlibrary['link']); ?>" name="link" class="form-control tx-area" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                    </div>
                    <div class="about">
                        <input type="hidden" name="id" value="<?php echo $rowlibrary['ID']; ?>" class="form-control" id="customFile" />


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