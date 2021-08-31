<div class="modal fade" id="speakers<?php echo $rowspeakers['ID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Speakers</h5>

            </div>
            <form method="post" enctype="multipart/form-data" action="logic/speakers.php">
                <div class="modal-body">

                    <div class="social">
                        <label class="form-label" for="customFile">title</label>
                        <div class="input-group mb-3">
                            <select class="form-select select-c" name="title" size="5" aria-label="size 3 select example" required>
                                <?php
                                include('logic\db.php');
                                $sql = "SELECT * FROM speaker";
                                $speaker = $link->query($sql);

                                $i = 1;
                                while ($rowspeaker = $speaker->fetch_assoc()) {
                                    if ($rowspeakers['name'] == $rowspeaker['ID']) {
                                ?>
                                        <option value="<?php echo $rowspeaker['ID'] ?>" selected><?php echo $rowspeaker['name'] ?></option>

                                    <?php

                                    } else {

                                    ?>
                                        <option value="<?php echo $rowspeaker['ID'] ?>"><?php echo $rowspeaker['name'] ?></option>


                                <?php

                                    }
                                }


                                ?>
                            </select>
                            <!-- <input type="text" value="<?php echo $rowspeakers['name']; ?>" name="title" class="form-control tx-area" aria-label="Default" aria-describedby="inputGroup-sizing-default" required> -->
                        </div>
                    </div>


                    <div class="about">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">description</label>
                            <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1" rows="3" required>
                            <?php echo $rowspeakers['description']; ?>
                            </textarea>
                        </div>
                    </div>

                    <div class="social">
                        <label class="form-label" for="customFile">Link</label>
                        <div class="input-group mb-3">
                            <input type="text" value="<?php echo $rowspeakers['link']; ?>" name="link" class="form-control tx-area" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                    </div>

                    <div class="about">
                        <input type="hidden" name="id" value="<?php echo $rowspeakers['ID']; ?>" class="form-control" id="customFile" />


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