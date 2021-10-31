<link rel="stylesheet" href="{{asset('assets/CSS/Style.css')}}">
<div>
    <form action="">
        <div class="item">
            <div class="above">
                <div class="headsec">
                    <div>
                        <label for="1">Month: </label>
                        <select id="1" value="" style="display: inline-block;">
                            <option>May</option>
                        </select><br>
                    </div><br>
                    <div>
                        <label for="2">Select Class: </label>
                        <select id="2" value="" style="display: inline-block;">
                            <option>Class | 6th Pay</option>
                        </select>
                    </div>
                </div>
                <div class="headsec">
                    <div>
                        <label for="3">Current Year: </label>
                        <select id="3" value="" style="display: inline-block;">
                            <option>2018</option>
                        </select><br>
                    </div><br>
                    <div>
                        <label for="4">Select Employee: </label>
                        <select id="4" value="" style="display: inline-block;">
                            <option>Mehul Patel</option>
                        </select>
                    </div>


                </div>
                <div class="headsec">
                    <input type="submit" class="btn" value="SELECT">
                </div>
            </div>
            <div class="above">
                <p style="display: inline-block;">Employee Name : </p>
                <span>Mehul Patel ,</span>
                <p style="display: inline-block;">Account No : </p>
                <span>552002010002</span>
            </div>
            <div class="above"><br>
                <div class="all">
                    <div class="left">
                        <div>
                            <p style="margin-bottom: 10px; margin-right: 5px;">Basic Pay : </p>
                            <p style="margin-bottom: 10px; margin-right: 5px;">Salary : </p>
                            <p style="margin-bottom: 10px; margin-right: 5px;">Total Leave : </p>
                            <p style="margin-bottom: 10px; margin-right: 5px;">Approve Leave : </p>
                            <p style="margin-bottom: 10px; margin-right: 5px;">Leave Deduction : </p>
                        </div>

                        <div>
                            <input type="text"
                                style="display: block; margin-bottom: 8px; border: solid green 1px;">

                            <input type="text"
                                style="display: block; margin-bottom: 8px; border: solid green 1px;">

                            <input type="text"
                                style="display: block; margin-bottom: 8px; border: solid green 1px;">

                            <input type="text"
                                style="display: block; margin-bottom: 8px; border: solid green 1px;">

                            <input type="text"
                                style="display: block; margin-bottom: 8px; border: solid green 1px;">
                        </div>

                    </div>
                    <div class="right">
                        <div>
                            <p style="margin-bottom: 20px; margin-right: 5px;">TravelAllowance : </p>
                            <p style="margin-bottom: 20px; margin-right: 5px;">MedicalAllwance : </p>
                            <p style="margin-bottom: 5px; margin-right: 5px;">WashingAllowance : </p>
                        </div>
                        <div>


                            <input type="text" style="display: block; margin-bottom: 20px; border: solid green 1px;">
                            <input type="text" style="display: block; margin-bottom: 20px; border: solid green 1px;">
                            <input type="text" style="display: block; margin-bottom: 5px; border: solid green 1px;">
                        </div>
                    </div>

                </div>
                <div class="get">
                    <div>
                        <p style="margin-bottom: 20px; margin-right: 5px;">DA : </p>
                        <p style="margin-bottom: 20px; margin-right: 5px;">HR : </p>
                    </div>
                    <div>
                        <div style="display: flex;">

                            <input type="text" style="display: block; margin-bottom: 20px; border: solid green 1px;margin-right: 10px;">
                            <span>% </span>
                        </div>

                       <div style="display: flex; ">
                           <input type="text" style="display: block; margin-bottom: 20px; border: solid green 1px;margin-right: 10px;" >
                           <span>% </span>

                       </div>
                    </div>
                    <input type="submit" value="Generate Salary" class="btn" style="width: 200px; margin-left: 100px; margin-top: 15px;">
                </div>
            </div>
        </div>

    </form>
</div>
