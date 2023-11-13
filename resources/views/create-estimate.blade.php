@extends ('layout')
@section ('content')

<div class="page-wrapper">
<main class="page-main">
        <div class="page-head">
            <div class="page-head__bg" style="background-image: url(./assets/img/bg/bg_categories.jpg)">
            <div class="page-head__content" data-uk-parallax="y: 0, 100">
                <div class="uk-container">
                <div class="header-icons"><span></span><span></span><span></span></div>
                <div class="page-head__title"> Cretae Estimate</div>
                <div class="page-head__breadcrumb">
                    <ul class="uk-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Cretae Estimate</span></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="page-content">
            <div class="uk-section-large uk-container">
            <div>
                <div>
                    <form class="ce-form" action="/create-estimate/done-estimate" method="post">
                        {{csrf_field()}}
                        <label>
                            <span> Center Line Length</span>
                            <input type="text" name="C_line_length" id="C_line_length" placeholder="00.00mm"><br>
                        </label>
                        
                        <fieldset>                            
                            <legend> &emsp;Foundation Details&emsp; </legend>
                            <label>
                                <span>Width</span>
                                <input type="text" name="F_width" id="F_width"><br>
                            </label>                            
                            <label>
                                <span>Height</span>
                                <input type="text" name="F_height" id="F_heigh"><br>
                            </label>                            
                        </fieldset>                        
                        <!---------------------------------------------------------------------------------------------------------------------->
                        <fieldset>
                            <legend>&emsp;Windows Details&emsp;</legend>                   
                            <label>
                                <span>Height</span>
                                <input type="text" name="Win_height"><br>
                            </label>
                            <label>
                                <span>Width</span>
                                <input type="text" name="Win_width"><br>
                            </label>
                            <label>
                                <span> Numbers of window</span>
                                <input type="text" name="No_of_win"><br>
                            </label>
                        </fieldset>
                        <!---------------------------------------------------------------------------------------------------------------------->
                        <fieldset>
                            <legend>&emsp;Doors Details&emsp;</legend>
                            <fieldset>
                                <legend>&emsp;Main Door Details&emsp;</legend>                    
                                <label>
                                    <span>Height</span>
                                    <input type="text" name="MD_height"><br>
                                </label>
                                <label>
                                    <span>Width</span>
                                    <input type="text" name="MD_width"><br>
                                </label>                                
                            </fieldset>
                            <fieldset>
                                <legend>&emsp;Rooms Doors Details&emsp;</legend>                    
                                <label>
                                    <span>Height</span>
                                    <input type="text" name="RD_height"><br>
                                </label>
                                <label>
                                    <span>Width</span>
                                    <input type="text" name="RD_width"><br>
                                </label>
                                <label>
                                    <span> Numbers of Doors</span>
                                    <input type="text" name="No_of_RD"><br>
                                </label>
                            </fieldset>
                        </fieldset>
                        <!---------------------------------------------------------------------------------------------------------------------->
                        <fieldset>
                            <legend>&emsp;Wall Details&emsp;</legend>
                            <label>
                                <span>What Material Use for Walls</span>
                                <select name="wall_material_list">
                                    <option name="">- Please Select Material -</option>
                                    <option name="Clay Bricks">Clay Bricks</option>
                                    <option name="Cement Bricks">Cement Bricks</option>
                                </select><br>
                            </label>
                            <label>
                                <span>Height</span>
                                <input type="text" name="Wall_height"><br>
                            </label>
                            <label>
                                <span>Width</span>
                                <input type="text" name="Wall_width"><br>
                            </label>
                        </fieldset>
                        <p style="color:red;font-weight:500;">*&ensp;We not measure roofs yet. Beacus roofs has several verient and sometimes customer choos they own design.</p>                    
                        <div class="btn-estimate">
                            <button type="submit" class="uk-button uk-button-large" name="submit">Create Estimate</button>
                        </div>
                    </form>                    
                </div>
            </div>
            </div>
        </div>
</div>
@endsection