@include('backend.template.partials.header')

<div class="card">
	<div class="container-fulid card-body">
		<div class="clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form name="register_client" id="register_client" action="edit_company_profile.html" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="form-group">
								<label> Company Name </label>
								<input type="text" class="form-control" size="25" name="frm_name" value="Ritech " readonly="1" onkeypress="if (!window.__cfRLUnblockHandlers) return false; return alphaNumSpaceOnly(event)">
								<div id="frm_name" style="color:#FF0000;"></div>
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div class="form-group">
								<label>Company Sub-Domain Name <a data-toggle="tooltip" data-placement="bottom" title="Please select your micro website subdomain name. You can not edit this later!" class="fa fa-question-circle"></a></label>
								<input type="text" class="form-control" size="25" name="sub_domain" id="subvalid" value="" onkeypress="if (!window.__cfRLUnblockHandlers) return false; return alphaNumSpaceOnly(event)">
								<div id="sub_domain_id" style="color:#F00;"></div>
							</div>
						</div>
						<div class="col-md-2 col-xs-12">
						<input type="button" name="chk_avali" value="Check Availability" onclick="if (!window.__cfRLUnblockHandlers) return false; check_subdomain(document.register_client.sub_domain.value,document.register_client)" class="btn btn-danger edit_btn_domin">
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="form-group">
								<label> Mobile</label>
								<input type="text" size="25" class="form-control" name="ph_no" value="7828773421" readonly="1">
								<div id="ph_no" style="color:#FF0000;"></div>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="form-group">
								<label> Email</label>
								<input type="text" size="25" class="form-control" name="email" value="riteshpanchal845@gmail.com" readonly="1">
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="form-group">
								<label>Logo</label>
								<input name="logo_new" type="file" class="form-control">
								<input type="hidden" name="logo" value="">
								<div id="logo" style="color:#FF0000;"></div>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="form-group">
								<label>Website Url</label>
								<input type="text" size="25" class="form-control" name="site_url" value="">
								<div id="site_url" style="color:#FF0000;"></div>
					        </div>
						</div>
						<div class="col-md-12 col-lg-12 marign_bottom_profile"> <br>
						</div>
						<div class="col-md-12 col-lg-12 marign_bottom_profile">
							<label>Description</label>
							<textarea rows="5" cols="40" name="detail" class="form-control"></textarea>
							<div id="detail" style="color:#FF0000;"></div>
						</div>

						<div class="col-md-4 col-xs-12">
							<div class="form-group">
								<label>Country</label>
								<input type="text" size="25" class="form-control" name="country" value="India" readonly="readonly">
								<div id="country" style="color:#FF0000;"></div>
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div class="form-group">
								<label>State</label>
								<input type="text" size="25" class="form-control" name="state" value="Madhya Pradesh" readonly="readonly">
								<div id="state" style="color:#FF0000;"></div>
							</div>
						</div>
						<div class="col-md-4 col-xs-12 ">
							<div class="form-group">
								<label>City</label>
								<input type="text" size="25" class="form-control" name="city" value="Indore" readonly="readonly">
								<div id="city" style="color:#FF0000;"></div>
							</div>
						</div>
						<div class="col-md-12 col-lg-12 marign_bottom_profile">
							<label>Street</label>
							<textarea rows="3" cols="19" class="form-control" name="address"></textarea>
							<div id="address" style="color:#FF0000;"></div>
						</div>	
						<div class="col-md-12 col-lg-12 marign_bottom_profile">
							<br>
							<h2 class="sidebar-title"><strong>Seo Information</strong></h2>
						<hr>
						</div>
						<div class="col-md-4 col-xs-12">
							<label>Meta Title </label>
							<input type="text" size="25" class="form-control" name="meta_title" value="Ritech -Indore-Madhya Pradesh">
							<div id="meta_title" style="color:#FF0000;"> </div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div class="form-group">
								<label>Meta Description</label>
								<input type="text" size="25" class="form-control" name="meta_desc" value="Ritech -Indore-Madhya Pradesh">
								<div id="meta_desc" style="color:#FF0000;"></div>
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div class="form-group">
								<label>Meta Keywords</label>
								<input type="text" size="25" class="form-control" name="meta_keywords" value="Ritech -Indore-Madhya Pradesh">
								<div id="meta_keywords" style="color:#FF0000;"> </div>
							</div>
						</div>

						<div class="col-md-12 col-lg-12 marign_bottom_profile">
							<label>Nature of Business</label>
							<label>Seller </label>
						</div>
					<div class="col-md-12 col-lg-12">
						<div class="form-group">
							<label>Business Category </label>
							<input type="radio" name="type" checked="checked">
							Seller Categories&nbsp; &nbsp; &nbsp;
							<div class="attireCodeToggleBlock" action="">
							<div id="sell_cat_drop">
								<div class="fstElement fstMultipleMode fstNoneSelected">
									<div class="fstControls">
										<input class="fstQueryInput fstQueryInputExpanded" style="" placeholder="Choose option"></div>
										<select multiple="" name="cat[]" class="multipleSelect" id="catgoryid">
											<option value="1189">Air Courier</option>
											<option value="1373">Air Fryer</option>
											<option value="1227">Apparel</option>
											<option value="1402">Apple</option>
											<option value="1339">Apple Watch Edition</option>
											<option value="1338">Apple Watch Hermès</option>
											<option value="1336">Apple Watch Series 2</option>
											<option value="1208">Architects</option>
											<option value="1289">ASDFASD</option>
											<option value="1229">Basic Accessories</option>
											<option value="1220">Bentley AQ</option>
											<option value="1221">BMW A8</option>
											<option value="1207">Builders Property</option>
											<option value="1206">Business Centers</option>
											<option value="1234">Button</option>
											<option value="1385">Buyer2</option>
											<option value="1345">Cams</option>
											<option value="1381">Car</option>
											<option value="1188">Clearing</option>
											<option value="1187">Cold Storage Warehouse</option>
											<option value="1223">Containment</option>
											<option value="1198">Contract Packaging</option>
											<option value="1186">Custom Clearing Agents</option>
											<option value="1231">Decorative</option>
											<option value="1230">Decorative Accessories</option>
											<option value="1256">Demo</option>
											<option value="1359">Demo Next Sub</option>
											<option value="1294">Demo0</option>
											<option value="1212">DEMO1</option>
											<option value="1197">Detective</option>
											<option value="1400">Dfaasd </option>
											<option value="1388">Dfjhaka </option>
											<option value="1376">Dfsf</option>
											<option value="1168">Digital Camera</option>
											<option value="1180">Dog Food</option>
											<option value="1196">Fashion</option>
											<option value="1224">Feeding Supplies</option>
											<option value="1232">Finishing Accessories</option>
											<option value="1258">Fone</option>
											<option value="1320">Food</option>
											<option value="1195">Food Catering</option>
											<option value="1321">Furniture Items</option>
											<option value="1319">Garden</option>
											<option value="1228">Garment Accessories</option>
											<option value="1312">Gold Jewellery</option>
											<option value="1370">Hair Straightener</option>
											<option value="1185">Headphones</option>
											<option value="1315">Herbal</option>
											<option value="1181">Home Audio,</option>
											<option value="1364">Honor</option>
											<option value="1322">Household Furniture</option>
											<option value="1163">HPDisk</option>
											<option value="1225">ID Tags</option>
											<option value="1333">IMac</option>
											<option value="1235">Interlining</option>
											<option value="1177">International Sea</option>
											<option value="1342">IPad</option>
											<option value="1340">IPad Pro</option>
											<option value="1297">Iphone</option>
											<option value="1324">Kids Fiction</option>
											<option value="1194">Language Translators</option>
											<option value="1205">Lawn Mowers</option>
											<option value="1317">Lenovo Ideacentre</option>
											<option value="1314">Light Pendant Finish</option>
											<option value="1330">MacBook</option>
											<option value="1331">MacBook Air</option>
											<option value="1332">MacBook Pro</option>
											<option value="1202">Machine</option>
											<option value="1323">Manufacturers</option>
											<option value="1193">Marriage Bureaus</option>
											<option value="1201">Material Testing</option>
											<option value="1350">Mini-computers</option>
											<option value="1352">Mini_board</option>
											<option value="1183">Mobile</option>
											<option value="1403">Musical Equipment Accessories</option>
											<option value="1412">Nest Sub Main Category</option>
											<option value="1414">Nest Sub Main Category2</option>
											<option value="1362">Next Sub Demo</option>
											<option value="1239">Next Test2</option>
											<option value="1240">Next Test3</option>
											<option value="1241">Next Test4</option>
											<option value="1242">Next Test5</option>
											<option value="1192">Orchestra, Music Party</option>
											<option value="1176">Packers</option>
											<option value="1191">Painting, Sculpting</option>
											<option value="1182">Phone</option>
											<option value="1372">Portable Room Air Purifier</option>
											<option value="1190">Product And Event Photography</option>
											<option value="1200">Product Inspection</option>
											<option value="1203">Real</option>
											<option value="1204">Real Estate Valuation</option>
											<option value="1199">Research</option>
											<option value="1348">Rusberry Pi</option>
											<option value="1401">Samsung</option>
											<option value="1162">SanDisk</option>
											<option value="1222">Scooter</option>
											<option value="1233">Sewing Thread</option>
											<option value="1371">Shaver For Men</option>
											<option value="1407">Shirtsm</option>
											<option value="1316">Shower</option>
											<option value="1164">Smasung</option>
											<option value="1184">Sony</option>
											<option value="1363">Sony</option>
											<option value="1415">Sub Main Category</option>
											<option value="1318">Table Lamp</option>
											<option value="1165">Test</option>
											<option value="1307">Test</option>
											<option value="1309">Test</option>
											<option value="1311">Test</option>
											<option value="1355">Test</option>
											<option value="1167">Test Button</option>
											<option value="1178">Test Next Sub Cat</option>
											<option value="1213">TEST2</option>
											<option value="1310">Test21</option>
											<option value="1356">Test555</option>
											<option value="1245">Test8</option>
											<option value="1175">Transport Agents, Bulk Carriers</option>
											<option value="1226">Treats &amp; Chews</option>
											<option value="1369">Trimmer</option>
											<option value="1174">Vessel Management, Ship Management</option>
											<option value="1173">Warehouses, Warehousing Agents</option>
										</select>
									</div>
								</div>	
						<script type="text/javascript">
							$('.multipleSelect').fastselect();
						</script>
						<span id="catgoryid2" style="color:#F00"></span>
						</div>
						<div id="cat_counts" style="color:#FF0000;"> </div>
						</div>
					</div>
						<div class="col-md-4 col-xs-12">
							<div class="form-group">
								<label>Year Company Registered</label>
									<select name="reg_yrs" class="form-control">
										<option value="" selected="selected">Please Select</option>
										<option value="2018">2018</option>
										<option value="2017">2017</option>
										<option value="2016">2016</option>
										<option value="2015">2015</option>
										<option value="2014">2014</option>
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
										<option value="2008">2008</option>
										<option value="2007">2007</option>
										<option value="2006">2006</option>
										<option value="2005">2005</option>
										<option value="2004">2004</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1990">1990</option>
										<option value="1989">1989</option>
										<option value="1988">1988</option>
										<option value="1987">1987</option>
										<option value="1986">1986</option>
										<option value="1985">1985</option>
										<option value="1984">1984</option>
										<option value="1983">1983</option>
										<option value="1982">1982</option>
										<option value="1981">1981</option>
										<option value="1980">1980</option>
										<option value="1979">1979</option>
										<option value="1978">1978</option>
										<option value="1977">1977</option>
										<option value="1976">1976</option>
										<option value="1975">1975</option>
										<option value="1974">1974</option>
										<option value="1973">1973</option>
										<option value="1972">1972</option>
										<option value="1971">1971</option>
										<option value="1970">1970</option>
										<option value="1969">1969</option>
										<option value="1968">1968</option>
										<option value="1967">1967</option>
										<option value="1966">1966</option>
										<option value="1965">1965</option>
										<option value="1964">1964</option>
										<option value="1963">1963</option>
										<option value="1962">1962</option>
										<option value="1961">1961</option>
										<option value="1960">1960</option>
										<option value="1959">1959</option>
										<option value="1958">1958</option>
										<option value="1957">1957</option>
										<option value="1956">1956</option>
										<option value="1955">1955</option>
										<option value="1954">1954</option>
										<option value="1953">1953</option>
										<option value="1952">1952</option>
										<option value="1951">1951</option>
										<option value="1950">1950</option>
										<option value="1949">1949</option>
										<option value="1948">1948</option>
										<option value="1947">1947</option>
										<option value="1946">1946</option>
										<option value="1945">1945</option>
										<option value="1944">1944</option>
										<option value="1943">1943</option>
										<option value="1942">1942</option>
										<option value="1941">1941</option>
										<option value="1940">1940</option>
										<option value="1939">1939</option>
										<option value="1938">1938</option>
										<option value="1937">1937</option>
										<option value="1936">1936</option>
										<option value="1935">1935</option>
										<option value="1934">1934</option>
										<option value="1933">1933</option>
										<option value="1932">1932</option>
										<option value="1931">1931</option>
										<option value="1930">1930</option>
										<option value="1929">1929</option>
										<option value="1928">1928</option>
										<option value="1927">1927</option>
										<option value="1926">1926</option>
										<option value="1925">1925</option>
										<option value="1924">1924</option>
										<option value="1923">1923</option>
										<option value="1922">1922</option>
										<option value="1921">1921</option>
										<option value="1920">1920</option>
										<option value="1919">1919</option>
										<option value="1918">1918</option>
										<option value="1917">1917</option>
										<option value="1916">1916</option>
										<option value="1915">1915</option>
										<option value="1914">1914</option>
										<option value="1913">1913</option>
										<option value="1912">1912</option>
										<option value="1911">1911</option>
										<option value="1910">1910</option>
										<option value="1909">1909</option>
										<option value="1908">1908</option>
										<option value="1907">1907</option>
										<option value="1906">1906</option>
										<option value="1905">1905</option>
										<option value="1904">1904</option>
										<option value="1903">1903</option>
										<option value="1902">1902</option>
										<option value="1901">1901</option>
										<option value="1900">1900</option>
									</select> 
								</div>
							</div>
						<div class="col-md-4 col-xs-12">
							<div class="form-group">
								<label>Key Personnel</label>
								<select name="emp_det" class="form-control">
									<option value="" selected="selected">Please Select</option>
									<option value="Less than 5 People">Less than 5 People</option>
									<option value="5-10 Pecitydataople">5-10 Pecitydataople</option>
									<option value="11-50 People">11-50 People</option>
									<option value="51-100 People">51-100 People</option>
									<option value="101-500 People">101-500 People</option>
									<option value="501-1000 People">501-1000 People</option>
									<option value="Above 1000 People">Above 1000 People</option>
								</select> 
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div class="form-group">
								<label>Ownership Type</label>
								<select name="own_type" class="form-control">
									<option value="" selected="selected">Please Select</option>
									<option value="Corporation/Limited Liability Company">Corporation/Limited Liability Company</option>
									<option value="Partnership">Partnership</option>
									<option value="LLC (Ltd Liability Corp)">LLC (Ltd Liability Corp)</option>
									<option value="Individual (Sole proprietorship)">Individual (Sole proprietorship)</option>
									<option value="Professional Association">Professional Association</option>
									<option value="Others">Others</option>
								</select> 
							</div>
						</div>
						<div class="col-md-12 col-lg-12 marign_bottom_profile">
							<label> Certification</label>
							<table width="100%" cellspacing="2" cellpadding="2" border="0">
								<tbody>
								<tr>
									<td>
										<input type="checkbox" name="certification[]" value="0" checked="0"></td>
										<td>HACCP</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="certification[]" value="1"></td>
											<td>ISO 9001:2000</td></tr>
											<tr>
												<td><input type="checkbox" name="certification[]" value="2"></td><td>ISO 9001:2008</td>
											</tr>
											<tr>
											<td>
												<input type="checkbox" name="certification[]" value="3"></td>
												<td>QS-9000</td>
											</tr>
											<tr>
												<td><input type="checkbox" name="certification[]" value="4"></td>
												<td>ISO 14001:2004</td>
											</tr>	
											<tr>
												<td><input type="checkbox" name="certification[]" value="5"></td>
												<td>ISO/TS 16949</td>
											</tr>
											<tr>
												<td><input type="checkbox" name="certification[]" value="6"></td><td>SA8000</td>
											</tr>
											<tr>
												<td><input type="checkbox" name="certification[]" value="7"></td><td>ISO 17799</td>
											</tr>
											<tr>
												<td><input type="checkbox" name="certification[]" value="8"></td><td>OHSAS 18001</td>
											</tr>
											<tr>
												<td><input type="checkbox" name="certification[]" value="9"></td><td>TL 9000</td>
											</tr>
											<tr><td><input type="checkbox" name="certification[]" value="10"></td><td>Others</td>
											</tr>
										</tbody>
								</table> <br>
							<div id="alert" style="color:#FF0000;"></div>
						</div>
						<div class="col-md-12 col-lg-12 marign_bottom_profile">
							<input name="id" type="hidden" value="">
							<input name="submit" class="btn btn-danger" type="submit" value="submit">
							<input type="hidden" value="1" name="count_cats" id="count_cats">
						</div>
					</div>
				</form>
			</div>
		</div>
</div>


@include('backend.template.partials.footer')
