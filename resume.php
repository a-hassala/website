


</head>
<body>

<div id="doc2" class="yui-t7">
	<div id="inner">

		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1>Anasse Hassala</h1>
					<h2><?php echo $subtitle; ?></h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<h3><a id="pdf" href=<?php echo'ressources/'. strtolower($cv) . '.pdf';?>>
							<span id="download"><?php echo $download;?></span></a></h3>
						<h3><a href="mailto:anasse@hassala.com">anasse@hassala.com</a></h3>
						<h3><?php echo $phone; ?></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2><?php echo $objectif ;?></h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								<?php echo $objectif_text; ?>
							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2><?php echo $skills; ?></h2>
						</div>
						<div class="yui-u">

								<div class="talent">
									<h2><?php echo $skill1; ?></h2>
									<p><?php echo $skill1_text ; ?>	</p>
								</div>

								<div class="talent">
									<h2><?php echo $skill2; ?></h2>
									<p><?php echo $skill2_text ; ?>	</p>
								</div>

								<div class="talent">
									<h2><?php echo $skill3 ; ?></h2>
									<p><?php echo $skill3_text ; ?>	</p>
								</div>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2><?php echo $tech; ?></h2>
						</div>
						<div class="yui-u">
							<ul class="talent">
								<li>C/C++</li>
								<li>JAVA</li>
								<li class="last">Ruby/PHP</li>
							</ul>

							<ul class="talent">
								<li>Cisco</li>
								<li>WireShark</li>
								<li class="last">TCP/IP</li>
							</ul>

							<ul class="talent">
								<li>Linux/Open Indiana</li>
								<li>OS X </li>
								<li class="last">Windows Server</li>
							</ul>
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">

						<div class="yui-u first">
							<h2><?php echo $exp; ?></h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
								<h2>MiNET</h2>
								<h3><?php echo $president; ?> (2014-2015)</h3>
								<h4>2013-2016</h4>
								<p><?php echo $minet; ?></p>
							</div>

							<div class="job last">
								<h2>Sprint</h2>
								<h3><?php echo $expert; ?></h3>
								<h4>2014-2016</h4>
								<p><?php echo $sprint; ?></p>
							</div>

							<!--<div class="job">
								<h2>Microsoft</h2>
								<h3>Principal and Creative Lead</h3>
								<h4>2004-2005</h4>
								<p>Intrinsicly transform flexible manufactured products without excellent intellectual capital. Energistically evisculate orthogonal architectures through covalent action items. Assertively incentivize sticky platforms without synergistic materials. </p>
							</div>


							<div class="job last">
								<h2>International Business Machines (IBM)</h2>
								<h3>Lead Web Designer</h3>
								<h4>2001-2004</h4>
								<p>Globally re-engineer cross-media schemas through viral methods of empowerment. Proactively grow long-term high-impact human capital and highly efficient innovation. Intrinsicly iterate excellent e-tailers with timely e-markets.</p>
							</div>-->

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2><?php echo $education; ?></h2>
						</div>
						<div class="yui-u">
							<h2>Télécom ParisTech, EURECOM - Sophia, France</h2>
							<h3><?php echo $eurecom; ?>&mdash; </h3><br/>
							<h2>Télécom SudParis - Evry, France</h2>
							<h3><?php echo $tsp; ?>&mdash; </h3><br/>
							<h2>Lycée Saint-Louis - Paris, France</h2>
							<h3><?php echo $cpge; ?>&mdash; </h3>
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p>Anasse Hassala &mdash; <a href="mailto:anasse@hassala.com">anasse@hassala.com</a> &mdash; <?php echo $phone; ?></p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>
