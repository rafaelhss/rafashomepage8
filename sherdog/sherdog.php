 <?php if (strlen($_GET["name"]) > 0): ?>
<!DOCTYPE html>
 <html lang="en">
<head>
  <title>Rafas Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://www.sherdog.com/css/w/sherdog_styles.css" media="screen" rel="stylesheet" type="text/css" >
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

<style>
	.profile_image { width: 200px; height: 250px}
	body { 
		background-color: #ccc; 
	}
    
    .top-buffer { margin-top:20px; }
	.faixa_roxa { background-color: purple; border-radius: 20px;}
	.faixa_azul { background-color: blue; border-radius: 20px;}
	.faixa_branca { background-color: white; border-radius: 20px; color: black;}
  
</style> 
<style>


div.gallery {
  margin: 5px;
  border: 1px solid #333;
  float: left;
  width: 150px;
  height: 100px;
  overflow: hidden;

}



div.clear {
clear:both;
  
}


div.gallery:hover {
  border: 1px solid #gray;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
	
</head>
<body>
<div class="container">
 <div class="content">
	<div class="col_left" itemscope="" itemtype="http://schema.org/Person">
        <section>
            <!--
		<div class="module bio_fighter vcard">
                                <h1><span class="fn">Rafael Henrique</span><br><span class="nickname">"<em>Rafa</em>"</span></h1>
                                <div class="content">
                    <div>
                        <img itemprop="image" src="img/profile.jpg" class="profile_image photo">
                        <div class="data">
                            <div class="bio">
                                <div class="birth_info">
                                    <span class="item birthday">
                                        Born: <span itemprop="birthDate">1983-03-23</span><br>
                                        <strong>
                                            Age: <span id="myage"></span>
                                        </strong>
                                    </span>
                                                                        <span class="item birthplace">
                                        <img src="https://www2-cdn.sherdog.com/2795/img/w/flags/br.png" class="big_flag" alt="Country">
                                                                                    <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="adr"><span itemprop="addressLocality" class="locality">Belo Horizonte</span></span><br>
                                                                                <strong itemprop="nationality">Brazil</strong>
                                    </span>
                                                                    </div>
                                <div class="size_info">
                                    <span class="item height">
                                        Height<br>
                                        <strong itemprop="height">6'00"</strong><br>
                                        183 cm                                    </span>
                                    <span class="item weight">
                                        Weight<br>
                                        <strong itemprop="weight">202 lbs</strong><br>
                                        92.0 kg                                    </span>
                                                                        <h5 class="item association">
                                        Association:<br>
                                                                                <strong><span itemprop="memberOf" itemscope="" itemtype="http://www.schema.org/Organization"><a class="association" itemprop="url" href="http://www.cerradomma.com"><span itemprop="name">Cerrado MMA</span></a></span> / <span itemprop="memberOf" itemscope="" itemtype="http://www.schema.org/Organization"><a class="association" itemprop="url" href="https://www.instagram.com/institutobrasiliadojo/"><span itemprop="name">Pombo Prreto Jiu Jitsu</span></a></span></strong>
                                    </h5>
                                    <br>
                                                                        <h6 class="item wclass">
                                        Class: <strong class="title"><a href="/stats/fightfinder?weightclass=Lightweight">Light Heavyweight</a></strong>
                                    </h6>
                                </div>
                            </div>
                            <div class="record">
                                <div class="count_history">
                                    <div class="left_side">
                                        <div class="bio_graph">
                                        <span class="card">
                                                <span class="result">Wins</span>
                                                <span class="counter">22</span>
                                            </span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 0%"></span>
                                            </span>
                                            <span class="graph_tag">0 KO/TKO (<em>0%</em>)</span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 16%"></span>
                                            </span>
                                            <span class="graph_tag">3 SUBMISSIONS (<em>14%</em>)</span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 84%"></span>
                                            </span>
                                            <span class="graph_tag">19 DECISIONS (<em>86%</em>)</span>
                                                                                    </div>
                                        <div class="bio_graph loser">
                                            <span class="card">
                                            <span class="result">Losses</span>
                                            <span class="counter">21</span>
                                            </span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 6%"></span>
                                            </span>
                                            <span class="graph_tag">1 KO/TKO (<em>5%</em>)</span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 25%"></span>
                                            </span>
                                            <span class="graph_tag">4 SUBMISSIONS (<em>19%</em>)</span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 61%"></span>
                                            </span>
                                            <span class="graph_tag">16 DECISIONS (<em>76%</em>)</span>
                                                                                    </div>
                                    </div>
                                                                    </div>
                                                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
-->
        </section>
        
        <!-- Fighter Biography -->
                <!-- End of fighter biography -->
        
            <section>
            <div class="module fight_history">
                <div class="module_header">
                    <h2>Fight History</h2>
                </div>
                <div class="content table">
                    <table border="1">
                        <tbody><tr class="table_head">
                            <td class="col_one">Result</td>
                            <td class="col_two">Art</td>
                            <td class="col_three">Event</td>
                            <td class="col_four">Phase</td>
                            <td class="col_five">Category</td>
							<td class="col_five">Method</td>
                        </tr>
			<tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Muay Thai</td>
                            <td><span itemprop="award">Distrithai 2020</span><br><span class="sub_line">Dez / 06 / 2020</span></td>
                            <td>Final</td>
                            <td>PESADISSIMO</td>
                            <td>Decision</td>
			</tr>
			<tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Prime Experience Jiu Jitsu 2020</span><br><span class="sub_line">Set / 19 / 2020</span></td>
                            <td>Valendo paçoca</td>
                            <td>MASTER 1 NOGI/<span class="faixa_roxa">ROXA</span>/PESADISSIMO</td>
                        	<td>Decision</td>
						</tr>
			<tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Prime Experience Jiu Jitsu 2020</span><br><span class="sub_line">Set / 19 / 2020</span></td>
                            <td>Final</td>
                            <td>MASTER 1 NOGI/<span class="faixa_roxa">ROXA</span>/PESADISSIMO</td>
                        	<td>Decision</td>
						</tr>
			<tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Prime Experience Jiu Jitsu 2020</span><br><span class="sub_line">Set / 19 / 2020</span></td>
                            <td>Semi-Final</td>
                            <td>MASTER 1 NOGI/<span class="faixa_roxa">ROXA</span>/PESADISSIMO</td>
                        	<td>Decision</td>
						</tr>                            
			<tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Brasileiro Centro Oeste NOGI 2020</span><br><span class="sub_line">Fev / 16 / 2020</span></td>
                            <td>Semi-Final</td>
                            <td>ABSOLUTO ADULTO + MASTER NOGI/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>                            
			<tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Brasileiro Centro Oeste NOGI 2020</span><br><span class="sub_line">Fev / 16 / 2020</span></td>
                            <td>Quartas de Final</td>
                            <td>ABSOLUTO ADULTO + MASTER NOGI/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>                            
			<tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Brasileiro Centro Oeste NOGI 2020</span><br><span class="sub_line">Fev / 16 / 2020</span></td>
                            <td>Final</td>
                            <td>MASTER 1 NOGI/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>                            
            <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Mundial NOGI 2020</span><br><span class="sub_line">Jan / 26 / 2020</span></td>
                            <td>Final</td>
                            <td>MASTER 1+2 NOGI/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>				
			<tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Mundial NOGI 2020</span><br><span class="sub_line">Jan / 26 / 2020</span></td>
                            <td>Semi final</td>
                            <td>MASTER 1+2 NOGI/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Submission (Back choke)</td>
						</tr>				
			<tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Mundial NOGI 2020</span><br><span class="sub_line">Jan / 26 / 2020</span></td>
                            <td>Quartas de final</td>
                            <td>MASTER 1+2 NOGI/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Mundial NOGI 2020</span><br><span class="sub_line">Jan / 25 / 2020</span></td>
                            <td>Oitavas de final</td>
                            <td>ABSOLUTO: MASTER 1+2 NOGI/<span class="faixa_roxa">ROXA</span></td>
                        	<td>Decision</td>
						</tr>
			<tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Copa Faca na Caveira 2019</span><br><span class="sub_line">Oct / 20 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 2 NOGI/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Copa Faca na Caveira 2019</span><br><span class="sub_line">Oct / 20 / 2019</span></td>
                            <td>Semi-final</td>
                            <td>MASTER 2/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Circuito Brasilia de Jiu Jitsu - 2a Edicao</span><br><span class="sub_line">Jul / 21 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 1 NOGI/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Circuito Brasilia de Jiu Jitsu - 2a Edicao</span><br><span class="sub_line">Jul / 21 / 2019</span></td>
                            <td>Sem-final</td>
                            <td>MASTER 1 NOGI/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Circuito Brasilia de Jiu Jitsu - 2a Edicao</span><br><span class="sub_line">Jul / 21 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 1/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Submission (Arm)</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Circuito Brasilia de Jiu Jitsu - 2a Edicao</span><br><span class="sub_line">Jul / 21 / 2019</span></td>
                            <td>Sem-final</td>
                            <td>MASTER 1/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">GDF Cup de Jiu Jitsu 2019</span><br><span class="sub_line">Jun / 30 / 2019</span></td>
                            <td>Oitavas de final</td>
                            <td>ABSOLUTO: ADULTO/<span class="faixa_roxa">ROXA</span></td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">GDF Cup de Jiu Jitsu 2019</span><br><span class="sub_line">Jun / 30 / 2019</span></td>
                            <td>Semi Final</td>
                            <td>ADULTO/<span class="faixa_roxa">ROXA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>KickBoxing</td>
                            <td><span itemprop="award">Campeonato Distrital de Kickboxing 2019</span><br><span class="sub_line">Mai / 25 / 2019</span></td>
                            <td>Semi Final</td>
                            <td>Ate 86Kg</td>
                        	<td>TKO (Medical stop)</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>KickBoxing</td>
                            <td><span itemprop="award">Campeonato Distrital de Kickboxing 2019</span><br><span class="sub_line">Mai / 25 / 2019</span></td>
                            <td>Quartas de Final</td>
                            <td>Ate 86Kg</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Brasiliense de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 11 / 2019</span></td>
                            <td>Final</td>
                            <td>ABSOLUTO: MASTER/<span class="faixa_azul">AZUL</span></td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Brasiliense de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 11 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>ABSOLUTO: MASTER/<span class="faixa_azul">AZUL</span></td>
                        	<td>Decision</td>
						</tr>
                            
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Brasiliense de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 11 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 1/<span class="faixa_azul">AZUL</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Brasiliense de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 11 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>MASTER 1/<span class="faixa_azul">AZUL</span>/PESADO</td>
                        	<td>Decision</td>
						</tr> 
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Open Brazilian Champion de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 04 / 2019</span></td>
                            <td>Final</td>
                            <td>ADULTO/<span class="faixa_azul">AZUL</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Open Brazilian Champion de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 04 / 2019</span></td>
                            <td>Semi-Final (Baia)</td>
                            <td>ADULTO/<span class="faixa_azul">AZUL</span>/PESADO</td>
                        	<td>Decision</td>
						</tr> 
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Open Brazilian Champion de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 04 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>ADULTO/<span class="faixa_azul">AZUL</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Prime Experience Jiu Jitsu 2019</span><br><span class="sub_line">Apr / 14 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 2 NOGI/<span class="faixa_azul">AZUL</span>/ACIMA 94KG</td>
                        	<td>Submission (Katagatame)</td>
						</tr> 
                        <tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Prime Experience Jiu Jitsu 2019</span><br><span class="sub_line">Apr / 14 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 2/<span class="faixa_azul">AZUL</span>/ATE 94KG</td>
                        	<td>Submission (Guilhota)</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Prime Experience Jiu Jitsu 2019</span><br><span class="sub_line">Apr / 14 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>MASTER 2/<span class="faixa_azul">AZUL</span>/ATE 94KG</td>
                        	<td>Decision</td>
						</tr> 
                        <tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Centro-Oeste Brasileiro Jiu Jitsu 2019</span><br><span class="sub_line">Mar / 16 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER/<span class="faixa_azul">AZUL</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Centro-Oeste Brasileiro Jiu Jitsu 2019</span><br><span class="sub_line">Mar / 16 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>MASTER/<span class="faixa_azul">AZUL</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>  
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Brasil Golden Cup Jiu Jitsu 2019</span><br><span class="sub_line">Feb / 17 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>ADULTO/<span class="faixa_azul">AZUL</span>/PESADO</td>
                        	<td>Submission (Back choke)</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Brasil Golden Cup Jiu Jitsu 2019</span><br><span class="sub_line">Feb / 17 / 2019</span></td>
                            <td>Quartas de Final</td>
                            <td>ABSOLUTO: ADULTO/<span class="faixa_azul">AZUL</span></td>
                        	<td>Submission</td>
						</tr>  
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Brasil Golden Cup Jiu Jitsu 2019</span><br><span class="sub_line">Feb / 17 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>ADULTO/<span class="faixa_azul">AZUL</span>/PESADO</td>
                        	<td>Submission (Armlock)</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Brasil Golden Cup Jiu Jitsu 2019</span><br><span class="sub_line">Feb / 17 / 2019</span></td>
                            <td>Quartas de Final</td>
                            <td>ADULTO/<span class="faixa_azul">AZUL</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>  
                        <tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Copa Faca na Caveira Jiu Jitsu 2018</span><br><span class="sub_line">Oct / 14 / 2018</span></td>
                            <td>Final</td>
                            <td>MASTER 1 NOGI/<span class="faixa_branca">BRANCA</span>/PESADISSIMO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Copa Faca na Caveira Jiu Jitsu 2018</span><br><span class="sub_line">Oct / 14 / 2018</span></td>
                            <td>Semi - Final</td>
                            <td>MASTER 1 NOGI/<span class="faixa_branca">BRANCA</span>/PESADISSIMO</td>
                        	<td>Decision</td>
						</tr>  
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Copa Faca na Caveira Jiu Jitsu 2018</span><br><span class="sub_line">Oct / 14 / 2018</span></td>
                            <td>Final</td>
                            <td>MASTER 1/<span class="faixa_branca">BRANCA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Copa Faca na Caveira Jiu Jitsu 2018</span><br><span class="sub_line">Oct / 14 / 2018</span></td>
                            <td>Semi-Final</td>
                            <td>MASTER 1/<span class="faixa_branca">BRANCA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>     
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">1a Copa Jiu Jitsu Recanto das Emas</span><br><span class="sub_line">Sep / 30 / 2018</span></td>
                            <td>Final</td>
                            <td>MASTER 1/<span class="faixa_branca">BRANCA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>
                        <tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Brasilia International Pro Jiu Jitsu 2018</span><br><span class="sub_line">Sep / 16 / 2018</span></td>
                            <td>Semi-Final</td>
                            <td>MASTER 1/<span class="faixa_branca">BRANCA</span>/PESADO</td>
                        	<td>Decision</td>
						</tr>    
                        <tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Muay Thai</td>
                            <td><span itemprop="award">Desafio Reagae Bar - Phi Phi Islands</span><br><span class="sub_line">Dec / 06 / 2017</span></td>
                            <td>Final</td>
                            <td>Pesado</td>
                        	<td>Decision</td>
						</tr>
                        
                    </tbody></table>
                </div>
            </div>
        </section>
		<!--
		<section>
		    <div class="module pictures">
                <div class="module_header">
                    <h2>Featured Pictures</h2>
				</div>
				<div class="content">

					<div class="gallery">
					  <a target="_blank" href="img/photo0.jpg">
						<img src="img/photo0.jpg" width="600" height="400">
					  </a>
					</div>
					<div class="gallery">
					  <a target="_blank" href="img/photo1.png">
						<img src="img/photo1.png" width="600" height="400">
					  </a>
					</div>
					<div class="gallery">
					  <a target="_blank" href="img/photo2.jpg">
						<img src="img/photo2.jpg" width="600" height="400">
					  </a>
					</div>
					<div class="gallery">
					  <a target="_blank" href="img/photo3.PNG">
						<img src="img/photo3.PNG" width="600" height="400">
					  </a>
					</div>
					<div class="gallery">
					  <a target="_blank" href="img/photo4.jpg">
						<img src="img/photo4.jpg" width="600" height="400">
					  </a>
					</div>
					<div class="gallery">
					  <a target="_blank" href="img/photo5.jpg">
						<img src="img/photo5.jpg" width="600" height="400">
					  </a>
					</div>
					<div class="gallery">
					  <a target="_blank" href="img/photo6.jpg">
						<img src="img/photo6.jpg" width="600" height="400">
					  </a>
					</div>
					<div class="gallery">
					  <a target="_blank" href="img/photo7.PNG">
						<img src="img/photo7.PNG" width="600" height="400">
					  </a>
					</div>

					<div class="clear"></div>
				</div>
			</div>
        </section>
		<section>
		    <div class="module pictures">
                <div class="module_header">
                    <h2>Featured Videos</h2>
				</div>
				<div class="content">

					<div class="gallery">
					  <a target="_blank" href="vid/video0.mp4">
						<img src="vid/video0.jpg" width="600" height="400">
					  </a>
					</div>
					<div class="gallery">
					  <a target="_blank" href="vid/video1.mp4">
						<img src="vid/video1.jpg" width="600" height="400">
					  </a>
					</div>
					<div class="gallery">
					  <a target="_blank" href="vid/video2.MOV">
						<img src="vid/video2.jpg" width="600" height="400">
					  </a>
					</div>
					<div class="gallery">
					  <a target="_blank" href="vid/video3.mp4">
						<img src="vid/video3.jpg" width="150px" height="50px">
					  </a>
					</div>


					<div class="clear"></div>
				</div>
			</div>
        </section>
                      -->                  
                      
        
    </div>
</div>

</div>
<script>
    
    //alert("c eh hack memo hein");
    
    
    var birthday = new Date("1983-03-23")
    var ageDifMs = Date.now() - birthday.getTime();
    var ageDate = new Date(ageDifMs); // miliseconds from epoch
    document.getElementById("myage").innerHTML = Math.abs(ageDate.getUTCFullYear() - 1970);
</script>
        </div>
      </div>
    </div>
	
	</body>
	</html>
	<? else: echo 'wrong password'; endif ?>
