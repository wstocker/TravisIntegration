<?php"
 
namespace Drupal\ActionKit\Controller;
 
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\ActionKit\MyClient;
 
/**
 * Class Controller.
 *
 * @package Drupal\ActionKit\Controller
 */
class Controller extends ControllerBase {
 
  /**
   * Drupal\ActionKit\MyClient definition.
   *
   * @var \Drupal\ActionKit\MyClient
   */
  protected $myClient;
 
  /**
   * {@inheritdoc}
   */
  public function __construct(MyClient $my_client) {
    $this->myClient = $my_client;
  }
 
  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('ActionKit.client')
    );
  }
 
  /**
   * Content.
   *
   * @return array
   *   Return array.
   */
  public function content() {
    $this->myClient->request());
    return [];
  }
}