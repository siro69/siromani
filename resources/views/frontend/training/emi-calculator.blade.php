<div id="emi-calculator" class="my-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 mb-4 mb-md-0">
				<form>
					<h2 class="text-center emi-header pt-2 pb-4">EMI Calculator</h2>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="loan-amount">Loan Amount (NPR)</label>
							<input type="number" class="form-control" placeholder="Example:  20,000" id="Loan-amount">
						</div>
						<div class="col-md-6 form-group">
							<label for="rate">Interest Rate (%)</label>
							<input type="number" class="form-control" placeholder="Example: 10%" id="rate">
						</div>
						<div class="col-md-12 form-group">
							<label for="rate">Tenure or Duration (in months)</label>
							<input type="number" class="form-control" placeholder="Example: 14 months" id="time">
						</div>
						<div class="col-md-3">
							<button class="emi-calculate btn">CALCULATE</button>
						</div>
						<div class="col-md-9 final-result">
							<span class="result-title">Monthly Payment (EMI)</span>
							<span class="result-amount">NPR. 3536.82</span>
						</div>
					</div>
				</form>
			</div>
			<!-- faq section -->
			<div class="col-md-6">
				<div class="faq-section">
					<h2 class="text-center emi-header pb-4">FAQ</h2>
					<div class="wrapper center-block">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<!-- first quesn-->
							<div class="panel panel-default">
								<div class="panel-heading active" role="tab" id="heading1">
									<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
										What is EMI?
									</a>
									</h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
									<div class="panel-body">
										<p>Equated Monthly Installment(EMI), as the name suggests, is one part of the equally divided monthly outgoes to clear off an outstanding loan within a stipulated time frame. </p>
										<p>The benefit of an EMI for borrowers is that they know precisely how much money they will need to pay toward their loan each month, making the personal budgeting process easier.</p>
									</div>
								</div>
							</div>
							<!-- second quesn-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading2">
									<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
										What is Loan Amount/Principal Amount ?
									</a>
									</h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
									<div class="panel-body">
										<p>A maximum loan amount describes the total amount that a borrower is authorized to borrow. Maximum loan amounts are used in standard loans, credit cards and line of credit accounts.</p>
									</div>
								</div>
							</div>
							<!-- third quesn -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading3">
									<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
										What is Interest Rate ?
									</a>
									</h4>
								</div>
								<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
									<div class="panel-body">
										<p>An interest rate is the cost of borrowing money, or conversely, the income earned from lending money. Interest rates are expressed as percentage of the principal per period.</p>
									</div>
								</div>
							</div>
							<!-- fourth quesn -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading4">
									<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
										What is Loan Tenure/Term ?
									</a>
									</h4>
								</div>
								<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
									<div class="panel-body">
										<p>Period from the date of disbursement of loan to the date of the last EMI payment or the date of closure of loan.</p>
									</div>
								</div>
							</div>
							<!-- fifth quesn-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading5">
									<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
										How EMI is calculated ?
									</a>
									</h4>
								</div>
								<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
									<div class="panel-body">
										<p>Formula of EMI calculation:</p>
										<img src="images/emiformula.png" class="emi-formula">
										<p>where</p>
										<p><b>E</b> is EMI</p>
										<p><b>P</b> is Principal Loan Amount
											<p><b>r</b> is rate of interest calculated on monthly basis.
												<p> (i.e., r = Rate of Annual interest/12/100. If rate of interest is 10.5% per annum, then r = 10.5/12/100=0.00875)</p>
												<p><b>n</b> is loan term / tenure / duration in number of months</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>