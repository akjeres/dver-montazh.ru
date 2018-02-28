<?php

/**
 * Class EmailFeedbackSender
 */
class EmailFeedbackSender extends DbFeedbackSender implements IFeedbackSender
{
    /**
     * @param IFeedbackForm $form
     * @return bool
     */
    public function send(IFeedbackForm $form)
    {
        $emailBody = Yii::app()->getController()->renderPartial('feedbackEmail', ['model' => $form], true);

        foreach (explode(',', $this->module->emails) as $mail) {
            $this->mail->send($form->getEmail(), $mail, $form->getTheme(), $emailBody);
        }

        if ($this->module->sendConfirmation) {
            $this->sendConfirmation($form);
        }

        return true;
    }

    /**
     * @param IFeedbackForm $form
     * @param FeedBack|null $feedBack
     * @return bool
     */
    public function sendConfirmation(IFeedbackForm $form, FeedBack $feedBack = null)
    {
        $emailBody = Yii::app()->getController()->renderPartial(
            'feedbackConfirmationEmailEmpty',
            ['model' => $form],
            true
        );

        return $this->mail->send(
            $this->module->notifyEmailFrom,
            $form->getEmail(),
            Yii::t(
                'FeedbackModule.feedback',
                'Your proposition on site "{site}" was received',
                ['{site}' => Yii::app()->name]
            ),
            $emailBody
        );
    }
}
