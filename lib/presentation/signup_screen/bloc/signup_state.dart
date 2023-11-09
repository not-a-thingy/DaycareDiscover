// ignore_for_file: must_be_immutable

part of 'signup_bloc.dart';

/// Represents the state of Signup in the application.
class SignupState extends Equatable {
  SignupState({
    this.fullNameController,
    this.emailController,
    this.passwordController,
    this.passwordController1,
    this.signupModelObj,
  });

  TextEditingController? fullNameController;

  TextEditingController? emailController;

  TextEditingController? passwordController;

  TextEditingController? passwordController1;

  SignupModel? signupModelObj;

  @override
  List<Object?> get props => [
        fullNameController,
        emailController,
        passwordController,
        passwordController1,
        signupModelObj,
      ];
  SignupState copyWith({
    TextEditingController? fullNameController,
    TextEditingController? emailController,
    TextEditingController? passwordController,
    TextEditingController? passwordController1,
    SignupModel? signupModelObj,
  }) {
    return SignupState(
      fullNameController: fullNameController ?? this.fullNameController,
      emailController: emailController ?? this.emailController,
      passwordController: passwordController ?? this.passwordController,
      passwordController1: passwordController1 ?? this.passwordController1,
      signupModelObj: signupModelObj ?? this.signupModelObj,
    );
  }
}
