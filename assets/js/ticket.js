
function render_ticket(id) {
    return `
        <div id="ticket-${id}" class="ticket col-xl-3 col-lg-3 col-md-6">
            <div class="single-coupon">
                <div class="coupon-head">
                    <h3 class="title">Pick 5 Numbers & 1 powerball</h3>
                    <div class="buttons">
                        <button class="seed-btn"  data-lotto="${id}" value="Generate numbers">Quick
                            Pick
                        </button>
                        <button class="btn-clear" >Clear All</button>
                        <button id="remove-ticket-btn"  onclick="remove_ticket(${id})"
                        class="circle remove" ><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="pic-keys">
                    <div class="pic-num main">
                        <span data-value="1">1</span>
                        <span data-value="2">2</span>
                        <span data-value="3">3</span>
                        <span data-value="4">4</span>
                        <span data-value="5">5</span>
                        <span data-value="6">6</span>

                        <span data-value="7">7</span>
                        <span data-value="8">8</span>
                        <span data-value="9">9</span>
                        <span data-value="10">10</span>
                        <span data-value="11">11</span>
                        <span data-value="12">12</span>

                        <span data-value="13">13</span>
                        <span data-value="14">14</span>
                        <span data-value="15">15</span>
                        <span data-value="16">16</span>
                        <span data-value="17">17</span>
                        <span data-value="18">18</span>


                        <span data-value="19">19</span>
                        <span data-value="20">20</span>
                        <span data-value="21">21</span>
                        <span data-value="22">22</span>
                        <span data-value="23">23</span>
                        <span data-value="24">24</span>

                        <span data-value="25">25</span>
                        <span data-value="26">26</span>
                        <span data-value="27">27</span>
                        <span data-value="28">28</span>
                        <span data-value="29">29</span>
                        <span data-value="30">30</span>

                        <span data-value="31">31</span>
                        <span data-value="32">32</span>
                        <span data-value="33">33</span>
                        <span data-value="34">34</span>
                        <span data-value="35">35</span>
                        <span data-value="36">36</span>


                        <span data-value="37">37</span>
                        <span data-value="38">38</span>
                        <span data-value="39">39</span>
                        <span data-value="40">40</span>
                        <span data-value="41">41</span>
                        <span data-value="42">42</span>

                        <span data-value="43">43</span>
                        <span data-value="44">44</span>
                        <span data-value="45">45</span>
                        <span data-value="46">46</span>
                        <span data-value="47">47</span>
                        <span data-value="48">48</span>

                        <span data-value="49">49</span>
                        <span data-value="50">50</span>
                        <span data-value="51">51</span>
                        <span data-value="52">52</span>
                        <span data-value="53">53</span>
                        <span data-value="54">54</span>
                    </div>
                    <div class="pic-num bonus">
                        <!-- <h4 class="pic-bonus-title">Pick 01 Bonus Numbers</h4> -->
                        <span data-value="1">1</span>
                        <span data-value="2">2</span>
                        <span data-value="3">3</span>
                        <span data-value="4">4</span>
                        <span data-value="5">5</span>
                        <span data-value="6">6</span>

                        <span data-value="7">7</span>
                        <span data-value="8">8</span>
                        <span data-value="9">9</span>
                        <span data-value="10">10</span>
                        <span data-value="11">11</span>
                        <span data-value="12">12</span>
                    </div>
                </div>
                <div class="selected-items">
                    <span class="title">Selected Numbers:</span>
                    <span class="rdm-seed-45"></span>
                    <span class="rdm-seed-20"></span>
                </div>
            </div>
        </div>`
}

function add_ticket(last_id){

    $('.lottery-coupon .tickets-container').append(render_ticket(last_id))
    update_prizes()
}

function get_tickets_count(){
    return $(".ticket").length
}

function remove_ticket(id){
    if(get_tickets_count() < 2)
        return;
    $('#ticket-'+id).remove();
    window._lotto[id] = null ;
    update_prizes();
}

function select_number(e){
    e.preventDefault()
    var seed = $(this).parent().parent().siblings('.coupon-head').find('.seed-btn');
    var index = seed.data('lotto');

    if ($(this).hasClass('coloured')) {
        window._lotto[index].common_balls.splice(window._lotto[index].common_balls.indexOf($(this).data('value')), 1)
    } else {
        if (window._lotto[index].common_balls.length < 5) {
            window._lotto[index].common_balls.push($(this).data('value'))
        }
    }
    adjust()
    console.log(`${index} Selected`)
}

function select_bonus(e) {
    e.preventDefault()
    var seed = $(this).parent().parent().siblings('.coupon-head').find('.seed-btn');
    var index = seed.data('lotto');

    if ($(this).hasClass('coloured')) {
        window._lotto[index].power_balls.splice(window._lotto[index].power_balls.indexOf($(this).data('value')), 1)
    } else {
        if (window._lotto[index].power_balls.length < 1) {
            window._lotto[index].power_balls.push($(this).data('value'))
        }
    }
    adjust()
}

function quick_play(e) {
    e.preventDefault()
    var index = $(this).data('lotto');
    var commons = Array.from({length: 54}, (x, i) => i + 1);
    var powers = Array.from({length: 12}, (x, i) => i + 1);

    var commons_shuffled = commons.sort(() => 0.5 - Math.random());
    var powers_shuffled = powers.sort(() => 0.5 - Math.random());

    window._lotto[index].common_balls = commons_shuffled.slice(0, 5)
    window._lotto[index].power_balls = powers_shuffled.slice(0, 1)


    adjust()
}

function clear_all(e) {
    e.preventDefault()
    var index = $(this).siblings('.seed-btn').data('lotto')
    window._lotto[index] = {
        common_balls: [],
        power_balls: []
    }
    adjust()
}

function submit_tickets(e) {
    e.preventDefault();

    let form =  $("form") ,
        tickets_count = get_tickets_count();
    if(tickets_count < 1){
        $('.alert').alert()
        return ;
    }

    console.log("ticket count : " + tickets_count);
    let i = 0 ;
    for(let ticket of window._lotto){
        if( ticket !== null )
           form.append("<input name='tickets["+ i++ +"]' value='" + JSON.stringify(ticket) + "' />")
    }

    form.submit();

}

function update_prizes() {
    let count = get_tickets_count();
    let unit_price = ticket_price;

    let new_total_price = count * unit_price;
    let discount = (1 - count) * discount_rate * new_total_price;


    $(".tickets-count").html(count);
    $("#total-price").attr("placeholder", "$" + new_total_price);
}
var last_id = 1;

$(function () {
    $("#add-ticket").on("click" , function(){
        add_ticket(last_id);
        $("#ticket-"+last_id+" .pic-num.main [data-value]").on("click",select_number);
        $("#ticket-"+last_id+" .pic-num.bonus [data-value]").on("click",select_bonus);
        $("#ticket-"+last_id+" .seed-btn").on("click",quick_play);
        $("#ticket-"+last_id+" .btn-clear").on("click",clear_all);
        window._lotto[last_id] =
            {
                common_balls: [],
                power_balls: []
            }
        last_id++;
    })
})