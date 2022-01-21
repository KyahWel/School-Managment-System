<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sectionController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('subjectModel');
		$this->load->model('classModel');
		$this->load->model('courseModel');
		$this->load->model('teacherModel');
		$this->load->model('sectionModel');
		$this->load->model('studentModel');
	}

	public function addSection(){
		if(isset($_POST['yearlevel']) && isset($_POST['classID']) && isset($_POST['capacity'])&& isset($_POST['sectionName'])){
			$sectionName = $_POST['sectionName'];
			$studentList = $this->input->post('studentList');
			$this->sectionModel->insertData();
			$data = $this->sectionModel->getDataName($sectionName);
			for($i=0;$i<sizeof($studentList);$i++){
				$this->sectionModel->addStudents($studentList[$i],$data,$i+1);;
			}
			redirect('Admin/section');
		}
		
	}
	
	public function viewSectionList(){
		$courseData = $this->input->post('courseID');
		$yearlevel = $this->input->post('yearlevel');
		if($courseData == NULL){
			$records = $this->sectionModel->yearlevelBasedSection($yearlevel);
		}
		elseif ($yearlevel == NULL){
			$records = $this->sectionModel->courseBasedSection($courseData);
		}
		else{
			$records = $this->sectionModel->viewSectionList($courseData,$yearlevel);
		}
		for ($i=0; $i<count($records); $i++){	
			echo '<option value='.$records[$i]['sectionID'].'>'.$records[$i]['sectionName'].'</option>';
		}
	}

	public function viewClassList(){
		$courseData = $this->input->post('courseID');
		$yearlevel = $this->input->post('yearlevel');
		if($courseData != NULL && $yearlevel != NULL){			
			$records = $this->classModel->Classlist($courseData,$yearlevel);
			foreach($records as $records){
				if($records->isTaken == 0){
					echo '<option value='.$records->classID.'>'.$records->class_code.'</option>';
				}			
			}	
		}
	}
	
	public function filteredStudentList(){
		$courseData = $this->input->post('courseID');
		$yearlevel = $this->input->post('yearlevel');
		$output = '
		<div class="table-responsive">
			<table class="table table-body align-middle table-striped table-borderless table-hover">
				<thead>
					<tr>
						<th style="width: 10px"></th>
						<th>Student ID</th>
						<th>Student Name</th>
						<th>Year Level</th>
						<th>Course</th>
					</tr>
				</thead>
				<tbody>
					<tr><input class="mx-3 parent" type="checkbox" disabled onclick="toggle(this);">Select Students</tr>												
				';
		if($courseData == NULL && $yearlevel == NULL){
			$student= $this->studentModel->viewNoSection();
		}
		elseif($courseData == NULL){
			$student = $this->studentModel->viewDataYearlevelBased($yearlevel);
		}
		elseif ($yearlevel == NULL){
			$student = $this->studentModel->viewDataCourseBased($courseData);
		}
		else{
			$student = $this->studentModel->viewFiltered($courseData,$yearlevel);
		}
		foreach($student as $student){
		$output.='
			<tr>
				<td style="text-align: justify"><input type="checkbox" name="studentList[]" disabled  value ='.$student->studentID.' class="mx-2 child">
				</td>
				<td>'.$student->studentNumber .' </td>
				<td>'.$student->firstname.' '.$student->lastname.'</td>
				<td>'.$student->yearlevel.'</td>
				<td>'.$student->degree.' in '.$student->major.'</td>
			</tr>
			';
		}
		$output.='
				</tbody>
			</table>
		</div>
		';
		echo $output;
	}
	
	public function editSection(){
		$sectionData = $this->input->post('sectionID');
		
		if($sectionData!=NULL){
			$records = $this->sectionModel->getData($sectionData);
			$student = $this->studentModel->viewSection($sectionData);
			$studentNoSection = $this->studentModel->viewNoSection();
			$output = '
				<form class="container" action="">
					<div class="row mb-3">
						<div class="col-lg-2">
							<!--Year Level-->
							<label class="form-label">Year Level</label>
							<input type="text" class="form-control" value="'.$records->yearlevel.'" readonly>
						</div>
						<div class="col-lg-4">
							<!--Course-->
							<label class="form-label">Course</label>
							<input type="text" class="form-control" value="'.$records->degree.' in '.$records->major.'"  readonly>
						</div>
						<div class="col-lg-4">
							<!--Section-->
							<label class="form-label">Section</label>
							<input type="text" class="form-control" value="'.$records->sectionName.'" readonly>
						</div>
						<div class="col-lg-2">
							<!--Capacity-->
							<label class="form-label">Capacity</label>
							<input type="text" class="form-control" value="'.$records->capacity.'" readonly>
						</div>
					</div>
					

					<div class="table-responsive">
					Number of students in this section: '.count($student).'/'.$records->capacity.'
						<table
							class="table table-body align-middle table-striped table-borderless table-hover">
							<thead>
								<tr>
									<th>Student ID</th>
									<th>Student Name</th>
									<th>Year Level</th>
									<th>Course</th>
								</tr>
							</thead>
							<tbody>
								';
					foreach($student as $student){
						$output.= '
								<tr>

									<td>'.$student->studentNumber.'</td>
									<td>'.$student->firstname.' '.$student->lastname.'</td>
									<td>'.$student->yearlevel.'</td>
									<td>'.$student->degree.' in '.$student->major.'</td>
								</tr>';
					}
					$output.='	
							</tbody>
						</table>
					</div>
					<div class="table-title">
										<div class="row">
											<div class="col">
												<h2>List of Students without sections</h2>
											</div>
										</div>
									</div>
									<br>
									<div class="table-responsive">
										<table class="table table-body align-middle table-striped table-borderless table-hover">
											<thead>
												<tr>
													<th style="width: 10px"></th>
													<th>Student ID</th>
													<th>Student Name</th>
													<th>Year Level</th>
													<th>Course</th>
												</tr>
											</thead>
											<tbody>
												<tr><input class="mx-3 parent" type="checkbox" onclick="toggleEdit(this);">Select Students</tr>											
												';
									foreach($studentNoSection as $studentNoSection){
										$output.= '
												<tr>
													<td style="text-align: justify"><input type="checkbox" name="studentList[]" value ='.$student->studentID.' class="mx-2 child">
													</td>	
													<td>'.$studentNoSection->studentNumber.'</td>
													<td>'.$studentNoSection->firstname.' '.$studentNoSection->lastname.'</td>
													<td>'.$studentNoSection->yearlevel.'</td>
													<td>'.$studentNoSection->degree.' in '.$studentNoSection->major.'  </td>
												</tr>';
									}
									$output.='											
											</tbody>
										</table>
									</div>
									<br>
					<div class="editSectionButton d-flex justify-content-end">
						<!--Buttons-->
						<button class="btn btn-default" id="save" type="submit" value="save">Add
							Students</button>
						<button class="btn btn-default" id="cancel" type="button"
							data-bs-dismiss="modal">Cancel</button>
					</div>
				</form>
			';
		}
		else{
			$student = $this->studentModel->viewNoSection();
			$output='
				<div class="text-center py-3">
					<h1>No section selected</h1>
				</div>
				<div class="editSectionButton d-flex justify-content-end">
						<!--Buttons-->
						<button class="btn btn-default" id="save" type="button"
							data-bs-dismiss="modal">Okay</button>
				</div>
		';
		}
		echo $output;
	}

	public function viewSection(){
		$sectionData = $this->input->post('sectionID');
		
		if($sectionData!=NULL){
			$records = $this->sectionModel->getData($sectionData);
			$student = $this->studentModel->viewSection($sectionData);
			$output = '
				<form class="container" action="">
					<div class="row mb-3">
						<div class="col-lg-2">
							<!--Year Level-->
							<label class="form-label">Year Level</label>
							<input type="text" class="form-control" value="'.$records->yearlevel.'" readonly>
						</div>
						<div class="col-lg-4">
							<!--Course-->
							<label class="form-label">Course</label>
							<input type="text" class="form-control" value="'.$records->courseID.'"  readonly>
						</div>
						<div class="col-lg-4">
							<!--Section-->
							<label class="form-label">Section</label>
							<input type="text" class="form-control" value="'.$records->sectionName.'" readonly>
						</div>
						<div class="col-lg-2">
							<!--Capacity-->
							<label class="form-label">Capacity</label>
							<input type="text" class="form-control" value="'.$records->capacity.'" readonly>
						</div>
					</div>
					

					<div class="table-responsive">
					Number of students in this section: '.count($student).'/'.$records->capacity.'
						<table
							class="table table-body align-middle table-striped table-borderless table-hover">
							<thead>
								<tr>
									<th>Student ID</th>
									<th>Student Name</th>
									<th>Year Level</th>
									<th>Course</th>
								</tr>
							</thead>
							<tbody>
								';
					foreach($student as $student){
						$output.= '
								<tr>

									<td>'.$student->studentNumber.'</td>
									<td>'.$student->firstname.' '.$student->lastname.'</td>
									<td>'.$student->yearlevel.'</td>
									<td>'.$student->course_chosen.'</td>
								</tr>';
					}
					$output.='	
							</tbody>
						</table>
					</div>
					<div class="table-title">
						<div class="row">
							div class="col">
								<h2>List of Students without sections</h2>
							</div>
						</div>
					</div>
					<br>
					<div class="table-responsive">
						<table class="table table-body align-middle table-striped table-borderless table-hover">
							<thead>
								<tr>
									<th style="width: 10px"></th>
									<th>Student ID</th>
									<th>Student Name</th>
									<th>Year Level</th>
									<th>Course</th>
								</tr>
							</thead>
							<tbody>
								<tr><input class="mx-3 parent" type="checkbox" onclick="toggle(this);">Select Students</tr>											
									<?php foreach ($student as $student) { ?>
										<tr>
											<td style="text-align: justify"><input type="checkbox" name="studentList[]" value =<?php echo $student->studentID ?> class="mx-2 child">
											</td>
											<td><?php echo $student->studentNumber ?> </td>
											<td><?php echo $student->firstname ?></td>
											<td><?php echo $student->yearlevel?></td>
											<td><?php echo $student->course_chosen?></td>
										</tr>
									<?php }?>
							</tbody>
						</table>
					</div>
					<br>
					<div class="editSectionButton d-flex justify-content-end">
						<!--Buttons-->
						<button class="btn btn-default" id="save" type="submit" value="save">Add
							Students</button>
						<button class="btn btn-default" id="cancel" type="button"
							data-bs-dismiss="modal">Cancel</button>
					</div>
				</form>
			';
		}
		else{
			$student = $this->studentModel->viewNoSection();
			$output='
				<div class="editSectionButton d-flex justify-content-end">
						<!--Buttons-->
						<button class="btn btn-default" id="save" type="button"
							data-bs-dismiss="modal">Okay</button>
				</div>
		';
		}
		echo $output;
	}


	public function updateData($classcode){
		
	}




}
