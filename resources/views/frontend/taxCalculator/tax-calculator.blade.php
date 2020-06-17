<div id="tax-calculator">
	<div class="container">
		<h2 class="text-center my-4">SALARY TAX CALCULATOR, NEPAL</h2>
		<form>
			<div class="row row-padding justify-content-center">
				<div class="col-md-6">
					<div class="form-group row">
						<label for="colFormLabel" class="col-sm-5 col-form-label">Nature of Employee</label>
						<div class="col-sm-5">
							<select class="form-control">
								<option value="1">Married</option>
								<option value="2">Unmarried</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label">Fiscal year</label>
						<div class="col-sm-5">
							<select class="form-control">
								<option value="1">2074/075</option>
								<option value="2">2075/076</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<!-- Annual year -->
			<div class="annual">
				<div class="row row-padding justify-content-center">
					<div class="col-md-6">
						<h4>Annual Income</h4>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-5 col-form-label">Monthly Salary</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="colFormLabel" placeholder="Rs. 40,000">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-5 col-form-label">Calculation as per</label>
							<div class="col-sm-5">
								<select class="form-control">
									<option value="1">Month</option>
									<option value="2">Year</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-5 col-form-label">Bonus Received</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="colFormLabel" placeholder="Rs. 40,000">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-5  pt-3 col-form-label">Gross Income</label>
							<div class="col-sm-5  pt-3  total">
								<input type="text" class="form-control" id="colFormLabel" placeholder="" readonly>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<h4>Annual Deduction</h4>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">Provident Fund</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="colFormLabel" placeholder="Rs. 80,000">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">Citizen Investment Trust</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="colFormLabel" placeholder="Rs. 30,000">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label"> Life Insurance</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="colFormLabel" placeholder="Rs. 30,000">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 pt-3 col-form-label">Gross Salary Deduction</label>
							<div class="col-sm-5  pt-3  total">
								<input type="text" class="form-control" id="colFormLabel" placeholder="" readonly>
							</div>
						</div>
					</div>
				</div>
				<!-- Medical insurance -->
				<div class="row row-padding justify-content-center">
					<div class="col-md-6">
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-5 col-form-label">Annual Medical Expense</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="colFormLabel" placeholder="Rs. 80,000">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">Medical TAX(15% of Medical Expenses)</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="colFormLabel" placeholder="Rs. 80,000">
							</div>
						</div>
					</div>
				</div>
				<!-- Calculate Modal -->
				<div class="row padding-only justify-content-center">
					<div class="calculate">
						<button type="button" class="btn" data-toggle="modal" data-target="#myModal">
						Calculate
						</button>
					</div>
					<div class="ml-3 reset">
						<button type="button" class="btn">
						Reset
						</button>
					</div>
					<div class="modal fade" id="myModal">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<!-- Modal Header -->
								<div class="modal-header">
									<div class="col-11 col-md-11 modal-title">
										<h3 class="text-center mt-4">Net Tax Liability</h3>
										<div class="mt-4 tax-amount">
											<div class="d-inline">
												Rs. <span>20,000</span> (Monthly)
											</div>
											<div class="pl-0 pl-md-5 d-block d-md-inline">
												Rs. <span>20,000</span> (Yearly)
											</div>
										</div>
									</div>
									<div class="col-1 col-md-1">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
								</div>
								<!-- Modal body -->
								<div class="modal-body">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="text-bold">Sum of EPF and CIT (EPF+CIT)</td>
												<td>Rs. 4,000</td>
											</tr>
											<tr>
												<td class="text-bold">Insurance</td>
												<td>Rs. 5,000</td>
											</tr>
											<tr>
												<td class="text-bold">Total Income (TI)</td>
												<td>Rs. 9,000</td>
											</tr>
											<tr>
												<td class="text-bold">Total Deduction (TD)</td>
												<td>Rs. 10,000</td>
											</tr>
											<tr>
												<td class="text-bold">Net Assessable (TI-TD)</td>
												<td>Rs. 20,000</td>
											</tr>
										</tbody>
									</table>
									<!-- Second table -->
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Assesible Income(Rs.)</th>
												<th>Rate(%)</th>
												<th>Tax Liability(Rs.)</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1,50,000</td>
												<td>1</td>
												<td>20,000</td>
											</tr>
										</tbody>
									</table>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Total Tax Liability</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Medical Tax:</td>
												<td>Rs. 67</td>
												<td></td>
											</tr>
											<tr>
												<td>Net Tax Liability(Monthly):</td>
												<td>Rs. 135</td>
												<td></td>
											</tr>
											<tr>
												<td>Net Tax Liability(Yearly):</td>
												<td>Rs. 1770</td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<!-- Modal footer -->
								<div class="modal-footer">
									<p><span>Note:</span> This is just a rough estimation.</p>
									<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-print"onclick="window.print()"></i>Print</button>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Income tax rate  -->
					<div class="taxrate ml-3">
						<button type="button" class="btn" data-toggle="modal" data-target="#newTaxrate">
						New Tax Rates For 2076-77
						</button>
						<!-- new tax rate modal -->
						<div class="modal fade" id="newTaxrate">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header">
										<div class="col-11 col-md-11 mt-4 modal-title">
											<h4>Income Tax Rates Of Nepal 2076-77</h4>
										</div>
										<div class="col-1 col-md-1">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
									</div>
									<!-- Modal body -->
									<div class="modal-body">
										<h6 class="text-center text-uppercase">For Individual</h6>
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Tax Rate</th>
													<th>Income Slab</th>
													<th>Taxable Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1%</td>
													<td>First Tax Slab (Yearly Income up to 4,00,000)</td>
													<td>4,00,000</td>
												</tr>
												<tr>
													<td>10%</td>
													<td>Next (Yearly Income up to 5,00,000)</td>
													<td>1,00,000</td>
												</tr>
												<tr>
													<td>20%</td>
													<td>Next (Yearly Income up to 7,00,000)</td>
													<td>2,00,000</td>
												</tr>
												<tr>
													<td>30%</td>
													<td>Next (Yearly Income up to 20,00,000)</td>
													<td>13,00,000</td>
												</tr>
												<tr>
													<td>36%</td>
													<td>Yearly Income 20,00,000 and Above	</td>
													<td>Remaining</td>
												</tr>
											</tbody>
										</table>
										<!-- second table -->
										<h6 class="text-center text-uppercase">For Couple</h6>
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Tax Rate</th>
													<th>Income Slab</th>
													<th>Taxable Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1%</td>
													<td>First Tax Slab (Yearly Income up to 4,50,000)</td>
													<td>4,50,000</td>
												</tr>
												<tr>
													<td>10%</td>
													<td>Next (Yearly Income up to 5,50,000)</td>
													<td>1,00,000</td>
												</tr>
												<tr>
													<td>20%</td>
													<td>Next (Yearly Income up to 7,50,000)</td>
													<td>2,00,000</td>
												</tr>
												<tr>
													<td>30%</td>
													<td>Next (Yearly Income up to 20,00,000)</td>
													<td>12,50,000</td>
												</tr>
												<tr>
													<td>36%</td>
													<td>Yearly Income 20,00,000 and Above	</td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
									
									<!-- Modal footer -->
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-print"onclick="window.print()"></i>Print</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- faq section -->
		<div class="row">
			<div class="col-md-8 offset-md-2 row-padding faq-section">
				<h4 class="text-center my-4">Frequently Asked Question(FAQ)</h4>
				<div class="wrapper center-block">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<!-- first quesn-->
						<div class="panel panel-default">
							<div class="panel-heading active" role="tab" id="heading1">
								<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
									What is Basic Salary ?
								</a>
								</h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
								<div class="panel-body">
									<p>Basic salary is the main component of your take-home pay. It’s your net salary without any special allowances that might also be added on. If you are working regular hours it should be a fairly consistent and predictable number.</p>
									<p>It’s useful to know how much your basic salary is alone in order to have an idea of your minimum monthly budget.</p>

									<p>This compares with gross salary and net salary. Companies also use the term cost to company, which refers to the total cost to the company of employing someone. </p>
								</div>
							</div>
						</div>
						<!-- second quesn-->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading2">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
									What is Provident fund (PF) ?
								</a>
								</h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
								<div class="panel-body">
									<p>Employees Provident Fund (कर्मचारी सञ्चय कोष) is the pension fund/provident fund for employees of government and private sector of Nepal, intended to help employees save a portion of their salary in the event of retirement, disability, sickness or unemployment. </p>

									<p>Currently employees are required to contribute 10% of their basic salary (i.e. excluding bonuses) with an equal contribution from their employer to their provident fund</p>
								</div>
							</div>
						</div>
						<!-- third quesn -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading3">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
									What is Citizen Investment Trust (CIT) ?
								</a>
								</h4>
							</div>
							<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
								<div class="panel-body">
									<p>Citizen Investment Trust (नागरिक लगानी कोष), a statutory institute under Citizen Investment Trust Act, 2047, has ownership of Nepal Government as a public financial organization.</p>
									<p> It operates and manages various types of retirement schemes / programs as well as various unit schemes and mutual fund program for both domestic and foreign investors to encourage the people for saving in order to expand fund and increase the investment opportunities along with the dynamic development of the capital market to contribute economic development of the nation.</p>

								</div>
							</div>
						</div>
						<!-- fourth quesn -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading4">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
									What is Allowance ?
								</a>
								</h4>
							</div>
							<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
								<div class="panel-body">
									<p>Any monetary benefit offered by the employer to its employees for meeting expenditures, over and above the basic salary are known as Salary Allowances.</p>
									<p> These salary allowances are given to meet the expenditure of particular nature. According to Income Tax Act, allowances are added to the salary of an individual and taxed under the head Income from Salaries.</p>
									<p>The salary allowances can be bifurcated into three broad categories, taxable, non-taxable and partly taxable allowances.</p>
								</div>
							</div>
						</div>
						<!-- fifth quesn-->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading5">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
									What is Annual Gross Salary ?
								</a>
								</h4>
							</div>
							<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
								<div class="panel-body">
									<p>Gross annual income represents the amount of money a person earns in one year from all sources before taxes. When preparing an income tax return, the gross annual income figure is the base figure with which to start.</p>
									<p>Knowing your gross annual income will help you to figure out how much taxes you will have to pay or get returned.</p>
								</div>
							</div>
						</div>
						<!-- sixth quesn -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading6">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
									What is Taxable Income ?
								</a>
								</h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
								<div class="panel-body">
									<p>Taxable income is the amount of income used to calculate how much tax an individual or a company owes to the government in a given tax year. </p>
									<hr>
									<p><b>Taxable Income formula for Individual is represented as,</b></p>
									<p>Taxable Income Formula = Gross Total Income – Total Exemptions – Total Deductions</p> 
									<p><b>Taxable Income Formula for Corporate is represented as,</b></p>
									<p>Taxable Income Formula = Gross Sales – Cost of Goods Sold – Operating Expense – Interest Expense – Tax Deduction/ Credit</p>
									<hr>
									<p>Taxable income includes wages, salaries, bonuses and tips, as well as investment income and unearned income.</p>
									<p></p>
								</div>
							</div>
						</div>
						<!-- seventh quesn -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading7">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
									What is Net Payable Tax ?
								</a>
								</h4>
							</div>
							<div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
								<div class="panel-body">
									<p>If you’re employed by someone else, your employer automatically deducts the necessary tax from your wage. Therefore, you should receive your net wage when you get paid. This system is known as Pay As You Go (PAYG) Withholding.</p>
									<p>At the end of the financial year when your income tax return is lodged, if too much tax has been deducted in the year (through the PAYG Withholding system) a refund will be due to you.</p>
								</div>
							</div>
						</div>
							<!-- Eighth quesn -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading8">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
									What is Tax Liability ?
								</a>
								</h4>
							</div>
							<div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
								<div class="panel-body">
									<p>Tax liability is the amount of money you owe to tax authorities, such as your local, state, and federal governments (e.g., the IRS). When you have a tax liability, you have a legally binding debt to your creditor. Both individuals and businesses can have tax liabilities.</p>
									<p>The government uses tax payments to fund social programs and administrative roles. For example, Social Security tax funds retirement and disability benefits.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>