<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // ressource_project
        if ($pathinfo === '/ressource/new') {
            return array (  '_controller' => 'RessourceBundle\\Controller\\DefaultController::newProjectAction',  '_route' => 'ressource_project',);
        }

        if (0 === strpos($pathinfo, '/GM')) {
            // gm_projet_homepage
            if (rtrim($pathinfo, '/') === '/GM') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gm_projet_homepage');
                }

                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gm_projet_homepage',);
            }

            // gm_projet_ajout
            if ($pathinfo === '/GM/AjoutFrais') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\DepenseController::ajoutfraisAction',  '_route' => 'gm_projet_ajout',);
            }

            // gm_projet_liste
            if ($pathinfo === '/GM/ListeFrais') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\DepenseController::listefraisAction',  '_route' => 'gm_projet_liste',);
            }

            // gm_projet_modification
            if ($pathinfo === '/GM/ModificationFrais') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\DepenseController::modificationfraisAction',  '_route' => 'gm_projet_modification',);
            }

            // gm_projet_suppression
            if (0 === strpos($pathinfo, '/GM/SuppressionFrais') && preg_match('#^/GM/SuppressionFrais/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gm_projet_suppression')), array (  '_controller' => 'GM\\ProjetBundle\\Controller\\DepenseController::suppressionfraisAction',));
            }

            // gm_projet_new_project
            if ($pathinfo === '/GM/new') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::newProjectAction',  '_route' => 'gm_projet_new_project',);
            }

            // gm_projet_list_project
            if ($pathinfo === '/GM/listeProjet') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::listeProjetAction',  '_route' => 'gm_projet_list_project',);
            }

            // gm_projet_project_status
            if ($pathinfo === '/GM/projectStatus') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::projectStatusAction',  '_route' => 'gm_projet_project_status',);
            }

            // gm_projet_received_project
            if ($pathinfo === '/GM/receivedProject') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::receivedProjectAction',  '_route' => 'gm_projet_received_project',);
            }

            // gm_projet_positioned_project
            if ($pathinfo === '/GM/positioned') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::positionedAction',  '_route' => 'gm_projet_positioned_project',);
            }

            // gm_projet_ressource_project
            if ($pathinfo === '/GM/ressource') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::ressourceAction',  '_route' => 'gm_projet_ressource_project',);
            }

            // gm_projet_detail_project
            if ($pathinfo === '/GM/detailProjet') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::detailProjetAction',  '_route' => 'gm_projet_detail_project',);
            }

            // gm_projet_ressource_affectation
            if ($pathinfo === '/GM/affectationRessource') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::affectationAction',  '_route' => 'gm_projet_ressource_affectation',);
            }

            // gm_projet_update_projects
            if ($pathinfo === '/GM/updateProjects') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\DsmsController::updateProjectsAction',  '_route' => 'gm_projet_update_projects',);
            }

            // gm_projet_update_excel
            if ($pathinfo === '/GM/excel') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\DsmsController::excelAction',  '_route' => 'gm_projet_update_excel',);
            }

            // gm_projet_suivi_assist
            if ($pathinfo === '/GM/assist') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::assistAction',  '_route' => 'gm_projet_suivi_assist',);
            }

            // gm_projet_suivi_infoColab
            if ($pathinfo === '/GM/infoColab') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::infoCollaborateurAction',  '_route' => 'gm_projet_suivi_infoColab',);
            }

            // gm_projet_suivi_candidature
            if ($pathinfo === '/GM/candidature') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::candidatureAction',  '_route' => 'gm_projet_suivi_candidature',);
            }

            // gm_projet_suivi_on_mission
            if ($pathinfo === '/GM/onMission') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::onMissionAction',  '_route' => 'gm_projet_suivi_on_mission',);
            }

            // gm_projet_suivi_on_mission_detail
            if ($pathinfo === '/GM/dtailOnMission') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::dtailOnMissionAction',  '_route' => 'gm_projet_suivi_on_mission_detail',);
            }

            // gm_projet_suivi_mydocument
            if ($pathinfo === '/GM/mydocument') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::mydocumentAction',  '_route' => 'gm_projet_suivi_mydocument',);
            }

            // gm_projet_suivi_savemydocument
            if ($pathinfo === '/GM/savemydocument') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::savemydocumentAction',  '_route' => 'gm_projet_suivi_savemydocument',);
            }

            if (0 === strpos($pathinfo, '/GM/fraisColab')) {
                // gm_projet_suivi_frais_colabs
                if ($pathinfo === '/GM/fraisColabs') {
                    return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::fraisColabsAction',  '_route' => 'gm_projet_suivi_frais_colabs',);
                }

                // gm_projet_suivi_frais_colab
                if ($pathinfo === '/GM/fraisColab') {
                    return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::fraisParColabAction',  '_route' => 'gm_projet_suivi_frais_colab',);
                }

            }

            // gm_projet_suivi_frais_valider
            if ($pathinfo === '/GM/validerFrais') {
                return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::validerFraisAction',  '_route' => 'gm_projet_suivi_frais_valider',);
            }

            if (0 === strpos($pathinfo, '/GM/export')) {
                // gm_projet_suivi_export
                if ($pathinfo === '/GM/export') {
                    return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::exportFraisAction',  '_route' => 'gm_projet_suivi_export',);
                }

                // gm_projet_suivi_export_tout
                if ($pathinfo === '/GM/exportTout') {
                    return array (  '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::exportToutAction',  '_route' => 'gm_projet_suivi_export_tout',);
                }

            }

        }

        // utilisateurs_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'utilisateurs_homepage');
            }

            return array (  '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::indexAction',  '_route' => 'utilisateurs_homepage',);
        }

        // utilisateurs_collaborateur
        if ($pathinfo === '/collaborateur') {
            return array (  '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::collaborateurAction',  '_route' => 'utilisateurs_collaborateur',);
        }

        // utilisateurs_arh
        if ($pathinfo === '/arh') {
            return array (  '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::assistantRHAction',  '_route' => 'utilisateurs_arh',);
        }

        if (0 === strpos($pathinfo, '/d')) {
            // utilisateurs_drh
            if ($pathinfo === '/drh') {
                return array (  '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::directeurRHAction',  '_route' => 'utilisateurs_drh',);
            }

            // utilisateurs_dg
            if ($pathinfo === '/dg') {
                return array (  '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::dgAction',  '_route' => 'utilisateurs_dg',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // utilisateurs_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::adminAction',  '_route' => 'utilisateurs_admin',);
            }

            // utilisateurs_atos
            if ($pathinfo === '/atos-externe') {
                return array (  '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::projetAction',  '_route' => 'utilisateurs_atos',);
            }

        }

        // utilisateurs_users
        if ($pathinfo === '/users') {
            return array (  '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::usersAction',  '_route' => 'utilisateurs_users',);
        }

        // utilisateurs_enable_user
        if ($pathinfo === '/enable') {
            return array (  '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::enableUserAction',  '_route' => 'utilisateurs_enable_user',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'UtilisateursBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'UtilisateursBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'UtilisateursBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'UtilisateursBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'UtilisateursBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'UtilisateursBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'UtilisateursBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
