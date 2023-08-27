php artisan make:model
php artisan make:migration create_employees_table
php artisan make:migration create_users_table
Employee
Department
Employee
Holiday
LeaveApplication
LeavesBalance
LeavesAdmin
ModulePermission
PermissionList
Designation
ProfileInformation
RolesPermissions
RoleTypeUser
StaffSalary
User
UserActivityLog
UserType

Trainer
Training
TrainingType
<!-- User and ProfileInformation:

One-to-One relationship.
Each user has one profile information.
Define an user_id foreign key in the profile_informations table.

User and Employee:

One-to-One relationship.
Each user can be associated with one employee record.
Define an employee_id foreign key in the users table.

User and UserActivityLog:

One-to-Many relationship.
Each user can have multiple activity logs.
Define an user_id foreign key in the user_activity_logs table.
Department and Employee:

One-to-Many relationship.
Each department can have multiple employees.
Define a department_id foreign key in the employees table.
PositionType and Employee:

One-to-Many relationship.
Each position type can have multiple employees.
Define a position_type_id foreign key in the employees table.
Employee and PerformanceAppraisal:

One-to-Many relationship.
Each employee can have multiple performance appraisals.
Define an employee_id foreign key in the performance_appraisals table.
PerformanceAppraisal and PerformanceIndicator:

Many-to-Many relationship.
Performance appraisals can be associated with multiple performance indicators.
Use an intermediate pivot table.
User and RolesPermissions:

Many-to-Many relationship.
Users can have multiple roles, and roles can have multiple users.
Use an intermediate pivot table.
RoleTypeUser and User:

Many-to-Many relationship.
User roles can be associated with multiple users.
Use an intermediate pivot table.
Employee and LeavesAdmin:

One-to-Many relationship.
Each employee can have multiple leave records.
Define an employee_id foreign key in the leaves_admin table.
User and PermissionList:

Many-to-Many relationship.
Users can have multiple permissions, and permissions can belong to multiple users.
Use an intermediate pivot table.
User and ModulePermission:

Many-to-Many relationship.
Users can have permissions for various modules, and modules can have multiple users with different permissions.
Use an intermediate pivot table.
Employee and StaffSalary:

One-to-One relationship.
Each employee can have one staff salary record.
Define an employee_id foreign key in the staff_salaries table.
Employee and Trainer:

One-to-One relationship.
Each employee can be associated with one trainer.
Define an employee_id foreign key in the trainers table.
Trainer and Training:

One-to-Many relationship.
Each trainer can conduct multiple training sessions.
Define a trainer_id foreign key in the trainings table.
TrainingType and Training:

One-to-Many relationship.
Each training type can be associated with multiple training sessions.
Define a training_type_id foreign key in the trainings table.
User and Holiday:

Many-to-Many relationship.
Users can be associated with multiple holidays (e.g., for leave requests).
Use an intermediate pivot table.
*/ -->
<!--
    1. $table->integer('vacation_days')->default(0);
$table->integer('sick_leave_days')->default(0);
$table->integer('personal_leave_days')->default(0);
$table->integer('Maternity/Paternity_leave_days')->default(0);
$table->integer('Bereavement_leave_days')->default(0);
$table->integer('Public_Holidays_leave_days')->default(0);
$table->integer('Unpaid_leave_days')->default(0);
$table->integer('Family_Medical _leave_days')->default(0);
$table->integer('Study_or_Exam_leave_days')->default(0); -->
