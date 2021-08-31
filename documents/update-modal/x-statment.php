<div class="modal fade" id="statements<?php echo $rowstatement['ID']; ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Statements</h5>

            </div>
            <form method="post" enctype="multipart/form-data" action="logic/statement.php">
                <div class="modal-body">

                    <div class="social">
                        <label class="form-label" for="customFile">title</label>
                        <div class="input-group mb-3">
                            <input type="text" value="<?php echo $rowstatement['name']; ?>" name="title"
                                class="form-control tx-area" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" required>
                        </div>
                    </div>

                    <div class="social">
                        <label class="form-label" for="customFile">Number of Statements</label>
                        <div class="input-group mb-3">
                            <input type="text" value="<?php echo $rowstatement['number']; ?>" name="number"
                                class="form-control tx-area" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" required>
                        </div>
                    </div>

                    <div class="about">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">description</label>
                            <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1"
                                rows="3" required>
                            <?php echo $rowstatement['description']; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="about">
                        <input type="hidden" name="id" value="<?php echo $rowstatement['ID']; ?>" class="form-control"
                            id="customFile" />


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