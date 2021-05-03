<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AssesmentApp
 *
 * @property int $id
 * @property int|null $ACT
 * @property int|null $ACTenglishScore
 * @property int|null $ACTreadingScore
 * @property int|null $ACTmathScore
 * @property int|null $ACTscienceScore
 * @property int|null $ACTcompositeScore
 * @property int|null $SAT
 * @property int|null $SATmath
 * @property int|null $SATCriticalThinking
 * @property int|null $SATwriting
 * @property int|null $SATcomposite
 * @property int|null $KYOTE
 * @property string|null $KYOTEarea1
 * @property int|null $KYOTEscore1
 * @property string|null $KYOTEarea2
 * @property int|null $KYOTEscore2
 * @property string|null $KYOTEarea3
 * @property int|null $KYOTEscore3
 * @property string|null $otherAssesments
 * @property int|null $skillsUSA
 * @property int|null $projectLeadTheWay
 * @property string|null $manufacturingAcedemics
 * @property string|null $awardsAndHonors
 * @property string|null $highSchoolAttended
 * @property int|null $GPA
 * @property string|null $highSchoolActivities
 * @property string|null $technicalPrograms
 * @property string|null $additionalComments
 * @property int|null $student_application_id
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereACT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereACTcompositeScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereACTenglishScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereACTmathScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereACTreadingScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereACTscienceScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereAdditionalComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereAwardsAndHonors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereGPA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereHighSchoolActivities($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereHighSchoolAttended($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereKYOTE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereKYOTEarea1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereKYOTEarea2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereKYOTEarea3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereKYOTEscore1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereKYOTEscore2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereKYOTEscore3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereManufacturingAcedemics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereOtherAssesments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereProjectLeadTheWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereSAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereSATCriticalThinking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereSATcomposite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereSATmath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereSATwriting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereSkillsUSA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereStudentApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssesmentApp whereTechnicalPrograms($value)
 */
	class AssesmentApp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactApp
 *
 * @property int $id
 * @property string|null $streetAddress
 * @property string|null $address2
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 * @property string|null $primaryPhone
 * @property string|null $altPhone
 * @property string|null $preferedContactMethod
 * @property string|null $otherEmail
 * @property int|null $student_application_id
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp whereAltPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp whereOtherEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp wherePreferedContactMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp wherePrimaryPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp whereStreetAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp whereStudentApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactApp whereZip($value)
 */
	class ContactApp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EmploymentApp
 *
 * @property int $id
 * @property string|null $employerName
 * @property string|null $employerPhone
 * @property string|null $workDuties
 * @property string|null $employmentStart
 * @property string|null $employmentEnd
 * @property string|null $reasonForLeaving
 * @property int|null $student_application_id
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentApp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentApp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentApp query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentApp whereEmployerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentApp whereEmployerPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentApp whereEmploymentEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentApp whereEmploymentStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentApp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentApp whereReasonForLeaving($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentApp whereStudentApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentApp whereWorkDuties($value)
 */
	class EmploymentApp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sponsor
 *
 * @property int $id
 * @property string|null $sponsor_name
 * @property string|null $webSiteUrl
 * @property string|null $socialMediaUrl
 * @property string|null $bodyText
 * @property string|null $headerText
 * @property string|null $missionText
 * @property string|null $specialContent
 * @property string|null $pic_path
 * @property string|null $contact_name
 * @property string|null $contact_email
 * @property string|null $contact_street_addr1
 * @property string|null $contact_street_addr2
 * @property string|null $contact_city
 * @property string|null $contact_state
 * @property string|null $contact_zip
 * @property string|null $contact_phone_num
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereBodyText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereContactCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereContactPhoneNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereContactState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereContactStreetAddr1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereContactStreetAddr2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereContactZip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereHeaderText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereMissionText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor wherePicPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereSocialMediaUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereSpecialContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereSponsorName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereWebSiteUrl($value)
 */
	class Sponsor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StatusApp
 *
 * @property int $id
 * @property string|null $under_18
 * @property string|null $authorizedInUS
 * @property string|null $levelOfEducation
 * @property string|null $relativeSponsors
 * @property string|null $workForSponsor
 * @property string|null $relative_sponsor_names
 * @property string|null $employed_sponsor_names
 * @property int $student_application_id
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp whereAuthorizedInUS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp whereEmployedSponsorNames($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp whereLevelOfEducation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp whereRelativeSponsorNames($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp whereRelativeSponsors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp whereStudentApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp whereUnder18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusApp whereWorkForSponsor($value)
 */
	class StatusApp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentApplication
 *
 * @property int $id
 * @property string $start_date
 * @property string|null $transcript_method
 * @property string|null $essay
 * @property string|null $application_action
 * @property int|null $currentSection
 * @property string $status
 * @property string $qualified
 * @property string|null $completed_date
 * @property int|null $user_id
 * @property mixed|null $transcript_data
 * @property string|null $transcript_file_ext
 * @property-read \App\Models\AssesmentApp|null $assesmentApp
 * @property-read \App\Models\ContactApp|null $contactApp
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EmploymentApp[] $employmentApp
 * @property-read int|null $employment_app_count
 * @property-read \App\Models\StatusApp|null $statusApp
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereApplicationAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereCompletedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereCurrentSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereEssay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereQualified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereTranscriptData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereTranscriptFileExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereTranscriptMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentApplication whereUserId($value)
 */
	class StudentApplication extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $role
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\StudentApplication|null $StudentApplication
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

