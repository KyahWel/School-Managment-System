<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class courseController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('courseModel');
	}


	public function addCourse()
	{
		if(isset($_POST['degree']) && isset($_POST['major']) && isset($_POST['college'])){
			$this->courseModel->insertData();
			redirect('Admin/course');
		}
	}

	public function viewCourse()
	{
		$courseData = $this->input->post('id');
        $records = $this->courseModel->getData($courseData);
		$output=' <div class="row mb-3">
					<div class="col-6">
						<label for="courseID" class="form-label">Course ID</label>
						<input type="text" class="form-control" id="courseID" name="courseID" value="'.$records->courseID.'" readonly>				
					</div>
					<div class="col-6">
						<label for="degree" class="form-label">Degree</label>
						<input type="text" class="form-control" id="degree" name="degree" value="'.$records->degree.'" readonly>
					</div>
				  </div>
				  <div class="row mb-3">
					<div class="col-6">
						<label for="major" class="form-label">Major</label>
						<input type="text" class="form-control" id="major" name="major" value="'.$records->major.'" readonly>				
					</div>
					<div class="col-6">
						<label for="college" class="form-label">College</label>
						<input type="text" class="form-control" id="college" name="college" value="'.$records->college.'" readonly>
					</div>
				  </div> ';
		echo $output;
	}

	public function viewCourseSubjects()
	{
		$courseData = $this->input->post('id');
        $records = $this->courseModel->getSubjects($courseData);
		// 1st Year subjects (1st semester)
		$test='<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col">
							<h2>List of Subjects for 1st Year (1st Semester)</h2>
						</div>
					</div>
				</div>
				<div class="table-responsive">  
					<table class="table table-default align-middle table-default table-borderless" id="table-body">
						<thead>
							<tr>
								<th>Subject Code</th>
								<th>Subject Name</th>
								<th>Units</th>
							</tr>
						</thead>
						<tbody>';
		for ($i=0; $i<count($records); $i++){	
		if($records[$i]['yearlevel']==1 && $records[$i]['status']==1  && $records[$i]['semester']=="1"){
			$test .='	<tr>
							<td>'.$records[$i]['subjectCode'].'</td>
							<td>'.$records[$i]['name'].'</td>
							<td>'.$records[$i]['units'].'</td> 
						</tr>';
			}
		}
		$test .='</tbody> </table>	
				</div> 
			</div> <br>';

		// 1st Year subjects (2nd semester)
		$test.='<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col">
							<h2>List of Subjects for 1st Year (2nd Semester)</h2>
						</div>
					</div>
				</div>
				<div class="table-responsive">  
					<table class="table table-default align-middle table-default table-borderless" id="table-body">
						<thead>
							<tr>
								<th>Subject Code</th>
								<th>Subject Name</th>
								<th>Units</th>
							</tr>
						</thead>
						<tbody>';
		for ($i=0; $i<count($records); $i++){	
		if($records[$i]['yearlevel']==1 && $records[$i]['status']==1  && $records[$i]['semester']=="2"){
			$test .='	<tr>
							<td>'.$records[$i]['subjectCode'].'</td>
							<td>'.$records[$i]['name'].'</td>
							<td>'.$records[$i]['units'].'</td> 
						</tr>';
			}
		}
		$test .='</tbody> </table>	
				</div> 
			</div> <br>';
		
		// 2nd Year subjects (1st Semester)
		$test.='<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col">
							<h2>List of Subjects for 2nd Year (1st Semester)</h2>
						</div>
					</div>
				</div>
				<div class="table-responsive">  
					<table class="table table-default align-middle table-default table-borderless" id="table-body">
						<thead>
							<tr>
								<th>Subject Code</th>
								<th>Subject Name</th>
								<th>Units</th>
							</tr>
						</thead>
						<tbody>';
		for ($i=0; $i<count($records); $i++){	
		if($records[$i]['yearlevel']==2 && $records[$i]['status']==1 && $records[$i]['semester']=="1"){
			$test .='	<tr>
							<td>'.$records[$i]['subjectCode'].'</td>
							<td>'.$records[$i]['name'].'</td>
							<td>'.$records[$i]['units'].'</td> 
						</tr>';
			}
		}
		$test .='</tbody> </table>	
				</div> 
			</div> <br>';
		
		// 2nd Year subjects (2nd Semester)
		$test.='<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col">
							<h2>List of Subjects for 2nd Year (2nd Semester)</h2>
						</div>
					</div>
				</div>
				<div class="table-responsive">  
					<table class="table table-default align-middle table-default table-borderless" id="table-body">
						<thead>
							<tr>
								<th>Subject Code</th>
								<th>Subject Name</th>
								<th>Units</th>
							</tr>
						</thead>
						<tbody>';
		for ($i=0; $i<count($records); $i++){	
		if($records[$i]['yearlevel']==2 && $records[$i]['status']==1 && $records[$i]['semester']=="2"){
			$test .='	<tr>
							<td>'.$records[$i]['subjectCode'].'</td>
							<td>'.$records[$i]['name'].'</td>
							<td>'.$records[$i]['units'].'</td> 
						</tr>';
			}
		}
		$test .='</tbody> </table>	
				</div> 
			</div> <br>';

		// 3rd Year subjects (1st Semester)
		$test.='<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col">
							<h2>List of Subjects for 3rd Year (1st Semester)</h2>
						</div>
					</div>
				</div>
				<div class="table-responsive">  
					<table class="table table-default align-middle table-default table-borderless" id="table-body">
						<thead>
							<tr>
								<th>Subject Code</th>
								<th>Subject Name</th>
								<th>Units</th>
							</tr>
						</thead>
						<tbody>';
		for ($i=0; $i<count($records); $i++){	
		if($records[$i]['yearlevel']==3 && $records[$i]['status']== 1 && $records[$i]['semester']== "1"){
			$test .='	<tr>
							<td>'.$records[$i]['subjectCode'].'</td>
							<td>'.$records[$i]['name'].'</td>
							<td>'.$records[$i]['units'].'</td> 
						</tr>';
			}
		}
		$test .='</tbody> </table>	
				</div> 
			</div> <br>';

		// 3rd Year subjects (2nd Semester)
		$test.='<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col">
							<h2>List of Subjects for 3nd Year (2nd Semester)</h2>
						</div>
					</div>
				</div>
				<div class="table-responsive">  
					<table class="table table-default align-middle table-default table-borderless" id="table-body">
						<thead>
							<tr>
								<th>Subject Code</th>
								<th>Subject Name</th>
								<th>Units</th>
							</tr>
						</thead>
						<tbody>';
		for ($i=0; $i<count($records); $i++){	
		if($records[$i]['yearlevel']==3 && $records[$i]['status']==1 && $records[$i]['semester']=="2"){
			$test .='	<tr>
							<td>'.$records[$i]['subjectCode'].'</td>
							<td>'.$records[$i]['name'].'</td>
							<td>'.$records[$i]['units'].'</td> 
						</tr>';
			}
		}
		$test .='</tbody> </table>	
				</div> 
			</div> <br>';


		// 4th Year subjects (1st Semester)
		$test.='<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col">
							<h2>List of Subjects for 4th Year (1st Semester)</h2>
						</div>
					</div>
				</div>
				<div class="table-responsive">  
					<table class="table table-default align-middle table-default table-borderless" id="table-body">
						<thead>
							<tr>
								<th>Subject Code</th>
								<th>Subject Name</th>
								<th>Units</th>
							</tr>
						</thead>
						<tbody>';
		for ($i=0; $i<count($records); $i++){	
		if($records[$i]['yearlevel']==4 && $records[$i]['status']==1 && $records[$i]['semester']=="1" ){
			$test .='	<tr>
							<td>'.$records[$i]['subjectCode'].'</td>
							<td>'.$records[$i]['name'].'</td>
							<td>'.$records[$i]['units'].'</td> 
						</tr>';
			}
		}
		$test .='</tbody> </table>	
				</div> 
			</div> <br>';

		// 4th Year subjects (2nd Semester)
		$test.='<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col">
							<h2>List of Subjects for 4th Year (2nd Semester)</h2>
						</div>
					</div>
				</div>
				<div class="table-responsive">  
					<table class="table table-default align-middle table-default table-borderless" id="table-body">
						<thead>
							<tr>
								<th>Subject Code</th>
								<th>Subject Name</th>
								<th>Units</th>
							</tr>
						</thead>
						<tbody>';
		for ($i=0; $i<count($records); $i++){	
		if($records[$i]['yearlevel']==4 && $records[$i]['status']==1  && $records[$i]['semester']=="2"  ){
			$test .='	<tr>
							<td>'.$records[$i]['subjectCode'].'</td>
							<td>'.$records[$i]['name'].'</td>
							<td>'.$records[$i]['units'].'</td> 
						</tr>';
			}
		}
		$test .='</tbody> </table>	
				</div> 
			</div> <br>';

		// 5th Year subjects (1st Semester)
		$test.='<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col">
							<h2>List of Subjects for 5th Year (1st Semester)</h2>
						</div>
					</div>
				</div>
				<div class="table-responsive">  
					<table class="table table-default align-middle table-default table-borderless" id="table-body">
						<thead>
							<tr>
								<th>Subject Code</th>
								<th>Subject Name</th>
								<th>Units</th>
							</tr>
						</thead>
						<tbody>';
		for ($i=0; $i<count($records); $i++){	
		if($records[$i]['yearlevel']==5 && $records[$i]['status']==1 && $records[$i]['semester']=="1"){
			$test .='	<tr>
							<td>'.$records[$i]['subjectCode'].'</td>
							<td>'.$records[$i]['name'].'</td>
							<td>'.$records[$i]['units'].'</td> 
						</tr>';
			}
		}
		$test .='</tbody> </table>	
				</div> 
			</div> <br>';
		
		// 5th Year subjects (2ndSemester)
		$test.='<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col">
							<h2>List of Subjects for 5th Year (2nd Semester)</h2>
						</div>
					</div>
				</div>
				<div class="table-responsive">  
					<table class="table table-default align-middle table-default table-borderless" id="table-body">
						<thead>
							<tr>
								<th>Subject Code</th>
								<th>Subject Name</th>
								<th>Units</th>
							</tr>
						</thead>
						<tbody>';
		for ($i=0; $i<count($records); $i++){	
		if($records[$i]['yearlevel']==5 && $records[$i]['status']==1  && $records[$i]['semester']=="2"){
			$test .='	<tr>
							<td>'.$records[$i]['subjectCode'].'</td>
							<td>'.$records[$i]['name'].'</td>
							<td>'.$records[$i]['units'].'</td> 
						</tr>';
			}
		}
		$test .='</tbody> </table>	
				</div> 
			</div> <br>';
		// Ending Button 
		$test .= '
			<div class="viewCourseButton d-flex justify-content-end">
				<button class="btn btn-default" id="okay" type="button" data-bs-dismiss="modal">Okay</button>
			</div>';
		echo $test;
	}

	public function editCourse(){
		$courseData = $this->input->post('id');
        $records = $this->courseModel->getData($courseData);
		$output = '<form method="POST" action="../courseController/updateCourse/'.$records->courseID.'"" id="editCourseForm">
			<div class="row mb-3">
				<div class="col-6">
					<label for="degree" class="form-label">Degree</label>
					<input type="text" class="form-control" id="degree" name="degree" value="'.$records->degree.'">
				</div>
				<div class="col-6"> 
					<label for="major" class="form-label">Major</label>
					<input type="text" class="form-control" id="major" name="major" value="'.$records->major.'">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-12">
					<label for="college" class="form-label">College:</label>
					<select name="college" id="college" class="form-control" required id="collegeSelect">
						<option value="" disabled selected hidden>'.$records->college.'</option>
						<option value="College of Science">College of Science</option>
						<option value="College of Engineering">College of Engineering</option>
						<option value="College of Industrial Education">College of Industrial Education</option>
						<option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
						<option value="College of Liberal Arts">College of Liberal Arts</option>
					</select>
				</div>
			</div>
			<div class="editCourseButton d-flex justify-content-end">
				<button class="btn btn-default" id="saveEdit" type="submit" value="save">Save</button>
				<button class="btn btn-default" id="cancelEdit" type="button" data-bs-dismiss="modal">Cancel</button>
			</div>  
		</form>';
		echo $output;
	}

	public function updateCourse($id)
	{	
		$this->courseModel->updateData($id);
		redirect('Admin/course');
	}

	public function deactivate($id)
	{	
		$this->courseModel->deactivateData($id);
		redirect('Admin/course');
	}

	public function activate($id)
	{	
		$this->courseModel->reactivateData($id);
		redirect('Admin/course');
	}

	

}
