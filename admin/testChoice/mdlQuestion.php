<div class="modal" tabindex="-1" id="modalQuestion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm, sửa câu hỏi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <input type="hidden" id="txtQuestionId">
                <div class="form-floating py-2">
                    <select required="true" class="form-control" placeholder="Leave a comment here" id="maMon">
                        <option value="">Nhập môn tương ứng</option>
                    </select>
                    <label for="maMon">Môn học:</label>
                </div>
                <div class="form-floating py-2">
                    <textarea class="form-control" placeholder="Leave a comment here" id="txtCauHoi"></textarea>
                    <label for="txtCauHoi">Câu hỏi:</label>
                </div>
                <div class="form-floating py-2">
                    <textarea class="form-control" placeholder="Leave a comment here" id="txtA"></textarea>
                    <label for="txtA">Đáp án A:</label>
                </div>
                <div class="form-floating py-2">
                    <textarea class="form-control" placeholder="Leave a comment here" id="txtB"></textarea>
                    <label for="txtB">Đáp án B:</label>
                </div>
                <div class="form-floating py-2">
                    <textarea class="form-control" placeholder="Leave a comment here" id="txtC"></textarea>
                    <label for="txtC">Đáp án C:</label>
                </div>
                <div class="form-floating py-2">
                    <textarea class="form-control" placeholder="Leave a comment here" id="txtD"></textarea>
                    <label for="txtD">Đáp án D:</label>
                </div>
                <div class="form-group py-2 border border-dark border-opacity-25 rounded" require>
                    <div class="form-check form-check-inline" style="padding-left: 12px;">Đáp án đúng:</div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rdOptionA">
                        <label class="form-check-label" for="rdOptionA">A</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rdOptionB">
                        <label class="form-check-label" for="rdOptionB">B</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rdOptionC">
                        <label class="form-check-label" for="rdOptionC">C</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rdOptionD">
                        <label class="form-check-label" for="rdOptionD">D</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" id="btnSubmit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    //Xử lý submit
    $('#btnSubmit').click(function() {
        let maMon = $('#maMon').val().trim();
        let question = $('#txtCauHoi').val().trim();
        let optionA = $('#txtA').val().trim();
        let optionB = $('#txtB').val().trim();
        let optionC = $('#txtC').val().trim();
        let optionD = $('#txtD').val().trim();
        let answer = $('#rdOptionA').is(':checked') ? 'A' : $('#rdOptionB').is(':checked') ? 'B' : $(
            '#rdOptionC').is(':checked') ? 'C' : $('#rdOptionD').is(':checked') ? 'D' : '';

        if (maMon.length == 0 || question.length == 0 || optionA.length == 0 || optionB.length == 0 || optionC.length == 0 || optionD
            .length == 0 || answer.length == 0) {
            alert('Vui lòng nhập đầy đủ các câu hỏi và đáp án');
            return;
        }

        let questionId = $('#txtQuestionId').val();

        if (questionId.length == 0) {
            $.ajax({
                url: 'addQuestion.php',
                type: 'post',
                data: {
                    maMon: maMon,
                    question: question,
                    optionA: optionA,
                    optionB: optionB,
                    optionC: optionC,
                    optionD: optionD,
                    answer: answer
                },
                success: function(data) {
                    alert(data);
                    $('#maMon').val('');
                    $('#txtCauHoi').val('');
                    $('#txtA').val('');
                    $('#txtB').val('');
                    $('#txtC').val('');
                    $('#txtD').val('');

                    $('#rdOptionA').prop('checked', false);
                    $('#rdOptionB').prop('checked', false);
                    $('#rdOptionC').prop('checked', false);
                    $('#rdOptionD').prop('checked', false);
                    $('#btnSearch').click();


                }
            });
        } else {
            $.ajax({
                url: 'update.php',
                type: 'post',
                data: {
                    id: questionId,
                    maMon: maMon,
                    question: question,
                    optionA: optionA,
                    optionB: optionB,
                    optionC: optionC,
                    optionD: optionD,
                    answer: answer
                },
                success: function(data) {
                    alert(data);
                    $('#modalQuestion').modal('hide');
                    $('#btnSearch').click();
                }
            });
        }
    });
    </script>