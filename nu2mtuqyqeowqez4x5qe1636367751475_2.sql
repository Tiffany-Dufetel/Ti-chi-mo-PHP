-- MySQL dump 10.13  Distrib 8.0.27, for macos11.6 (arm64)
--
-- Host: localhost    Database: php_mvc_boilerplate
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `blog_posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (1,'Il fait se rencontrer ses parents en 1955','<p>Tout d\'abord, il rencontre dans un café son père George et, juste après, le sauve d\'un accident de la circulation en étant renversé à sa place par la voiture de son futur grand-père maternel. Tombant inconscient, Marty se réveille le soir même, neuf heures plus tard, dans la chambre de sa mère, Lorraine Baines, à cette époque une adolescente en fleur. Mais Marty se rend rapidement compte à son grand effarement que sa mère est tombée amoureuse de lui. Invité à rester manger chez les Baines, Marty part en catastrophe quand sa mère (qui ne sait évidemment pas qu\'il est son fils) commence à le draguer avec insistance.</p><p>Le lendemain, Marty revoit son père et tente de le convaincre d\'aller à la « Féerie dansante des Sirènes » (le bal du lycée) avec sa mère, alors que celle-ci est déjà tombée amoureuse de Marty et que Biff Tannen (qui tyrannisait aussi George à l\'époque) a des vues sur elle. Dans un premier temps, George, intimidé, refuse d\'essayer de sortir avec Lorraine. Mais, usant d\'un stratagème durant la nuit, Marty — déguisé avec sa combinaison anti-radiations en Dark Vador —, menace George de lui faire fondre la cervelle s\'il n\'invite pas Lorraine. Il aide ensuite George à draguer Lorraine dans un café mais Biff arrive et interrompt sa tentative. Marty provoque alors Biff et sa bande. Ceux-ci, en voulant le poursuivre en voiture, heurtent un camion transportant du fumier, sous lequel ils sont ensevelis. Lorraine, impressionnée, suit alors Marty jusqu\'à l\'atelier de Doc (que Marty lui présentera comme étant son oncle) et lui demande d\'être son cavalier au bal, au grand dam de Doc, témoin de la scène. Cependant Marty accepte, imaginant un scénario où il se fera mettre KO par George, après que Marty se sera montré trop entreprenant avec Lorraine avant le bal, dans la voiture garée sur le parking du lycée.</p><p>Le soir du bal, Marty, assis dans la voiture avec Lorraine, attend la venue de George pour appliquer le scénario qu\'ils ont prévu ensemble. Mais sa mère, sous le charme de Marty, l\'embrasse contre son gré ; elle se rend cependant compte que quelque chose ne va pas, ayant l\'impression d\'embrasser son propre frère. Sur ces entrefaites survient Biff, furieux contre Marty à cause de l\'épisode du fumier, alors que Marty pensait que c\'était George qui arrivait. Dans un premier temps, Biff veut se battre avec lui mais, en voyant Lorraine dans la voiture, il remet Marty à ses amis (qui l\'enferment dans le coffre de la voiture des musiciens du bal, non loin de là) et tente de violer Lorraine. C\'est alors que George surgit ; ne reconnaissant pas Biff dans la voiture, il est surpris lorsque celui-ci se retourne et lui ordonne de partir. Mais George, pour la première fois de sa vie, décide de lui tenir tête. Biff sort alors de la voiture et lui fait une clé de bras. Lorraine, en essayant d\'aider George, est jetée à terre par Biff, qui se moque d\'elle. George, voyant cela, se met en colère et trouve la force d\'infliger à Biff un violent coup de poing qui met ce dernier KO ; relevant Lorraine, qui tombe sous son charme, il l\'emmène ensuite au bal. Pendant ce temps, les musiciens essaient de libérer Marty du coffre de leur voiture. Dans la manœuvre, le chanteur-guitariste se blesse à la main avec un tournevis. Marty sort finalement du coffre et arrive juste à temps pour voir George mettre son coup de poing à Biff.</p>','Docteur Emmett Brown','2021-11-08 11:19:50'),(2,'Une dinde hein ?','<p>Alors essaie de t\'imaginer à l\'ère Crétacé. Tu jettes ton premier coup d\'œil sur cette grosse dinde en débouchant dans une clairière. Elle avance comme un oiseau, en hochant de la tête. Et tu ne bogues plus, parce que tu te dis que, peut-être, son acuité visuelle est basée sur le mouvement, comme le tyrannosaure, et qu\'il t\'oubliera si tu ne bouges pas. Mais non. Pas le vélociraptor. Tu le fixes dans les yeux. Et il te fixe aussi intensément. Et c\'est alors que l\'attaque survient. Elle ne vient pas de face, mais par les côtés. Des deux autres raptors que tu n\'avais même pas encore vu. Parce que le vélociraptor n\'est pas un chasseur solitaire. Il utilise un schéma d\'attaque coordonnée. Et il est sorti en force, aujourd\'hui. Il fend l\'air et te lacère avec ça. Une griffe rétractile de vingt centimètres, coupante comme un rasoir sur le doigt du milieu. Il ne prend pas la peine de te mordre à la jugulaire, comme le lion. Non non. Il t\'entaille ici ou ici. Il t\'ouvre peut-être le ventre, qui déverse tes intestins. Le pire c\'est que… tu es vivant lorsqu\'il te dévore. Alors essaie de te montrer un peu respectueux.</p>','Docteur Alan Grant','2021-11-08 11:19:50'),(3,'C’est une bonne situation, ça, scribe ?','<p>Mais, vous savez, moi je ne crois pas qu’il y ait de bonne ou de mauvaise situation. Moi, si je devais résumer ma vie aujourd’hui avec vous, je dirais que c’est d’abord des rencontres, des gens qui m’ont tendu la main, peut-être à un moment où je ne pouvais pas, où j’étais seul chez moi. Et c’est assez curieux de se dire que les hasards, les rencontres forgent une destinée… Parce que quand on a le goût de la chose, quand on a le goût de la chose bien faite, le beau geste, parfois on ne trouve pas l’interlocuteur en face, je dirais, le miroir qui vous aide à avancer. Alors ce n’est pas mon cas, comme je le disais là, puisque moi au contraire, j’ai pu ; et je dis merci à la vie, je lui dis merci, je chante la vie, je danse la vie… Je ne suis qu’amour ! Et finalement, quand beaucoup de gens aujourd’hui me disent : « Mais comment fais-tu pour avoir cette humanité ? » Eh bien je leur réponds très simplement, je leur dis que c’est ce goût de l’amour, ce goût donc qui m’a poussé aujourd’hui à entreprendre une construction mécanique, mais demain, qui sait, peut-être simplement à me mettre au service de la communauté, à faire le don, le don de soi…</p>','Otis','2021-11-08 11:19:50');
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-08 11:23:35
